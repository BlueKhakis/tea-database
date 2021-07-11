<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Tea;

class UserController extends Controller
{
    public function token(Request $request)
    {
        // authentication attempt - using credentials from request
        if (Auth::attempt($request->all())) {
            // storing authenticated user into variable
            $user = Auth::user();

            // revoking all existing tokens
            $user->tokens()->delete();

            // create new auth token
            $token = $user->createToken('token-name');

            return [
                'message' => 'success',
                'user' => Auth::user(),
                'token' => $token->plainTextToken,
            ];
        }

        return [
            'message' => 'invalid'
        ];
    }

    public function user()
    {
        $user = Auth::user();

        return [
            'user' => $user
        ];
    }

    public function logout()
    {
        $user = Auth::user();

        $user->tokens()->delete();
    }

    public function userNameUpdate(Request $request)
    {
        // $user = Auth::user();
        
        // $request->name ? $request->name : $user->name;
        // $user->update([
        //     'name' => $request->name,
        //     'email' => $user->email
        // ]);

        // $request->email ? $request->email : $user->email;
        // $user->update([
            
        //     'email' => $request->email
           
        // ]);

        // $request->password ? $request->password : $user->password;

        // $user->update([
            
        //     'password' => $request->password
        // ]);
        

        return view('user.editUserName');
        
    }

    public function userEmailUpdate(Request $request)
    {
        $user = Auth::user();
        
        // $request->name ? $request->name : $user->name;
        // $user->update([
        //     'name' => $request->name,
        //     'email' => $user->email
        // ]);

        //$request->email ? $request->email : $user->email;
        $user->update([
            'name' => $user->name,
            'email' => $request->email
           
        ]);

        // $request->password ? $request->password : $user->password;

        // $user->update([
            
        //     'password' => $request->password
        // ]);
        

        return redirect(action('UserController@index'));
        
    }

    public function userNameUpdate2(Request $request)
    {

        $user = Auth::user();
        
        $request->name ? $request->name : $user->name;

        $user->update([
            'name' => $request->name,
            'email' => $user->email
        ]);

        return redirect(action('UserController@index'));
    }

    public function userEmailUpdate2()
    {

        return view('user.edituseremail');
    }

    public function index()
    {

        return view('user.userHomePage');

    }

    public function edit(Request $request)
    {

                $request->password ? $request->password : $user->password;

                $user = Auth::user();
        $new_password = bcrypt($request->password);
        $user->update([
            
            'password' => $new_password
        ]);

        return redirect(action('UserController@index'));

    }

    public function editUserName()
    {
        return view('user.editusername');
    }
    
    public function store(Request $request)
    {
        if($request->file('image'))
        {
            $image_file = $request->file('image');  
            $image_file->storeAs('users', $image_file->getClientOriginalName(), 'public');
            $user = Auth::user();
            $user->image = 'users/'.$image_file->getClientOriginalName();
            $user->save();
        }

        return redirect(action('UserController@index'));
        
    }
}
