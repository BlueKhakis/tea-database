<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Tea;
use Illuminate\Support\Facades\Session;

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

        $request->password ? $request->password : $user->password;

        $user->update([
            
            'password' => $request->password
        ]);

        if ( $request->email == true )
            Session::flash('status', 'Thank you for editing your email');
        else
            Session::flash('status', 'Type fyour new e-mail');


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

        if ( $request->name == true )
            Session::flash('status', 'Thank you for editing your name');
        else
            Session::flash('status', 'Type your new user name');


        return redirect(action('UserController@index'));
    }

    public function userEmailUpdate2()
    {

        return view('user.edituseremail');
    }

    public function index()
    {
        $teas = Tea::all();
        
        return view('user.userHomePage', compact('teas'));

    }

    public function edit(Request $request)
    {
                $user = Auth::user();


                $request->password ? $request->password : $user->password;
          
        
        $new_password = bcrypt($request->password);
        $user->update([
            
            'password' => $new_password
        ]);

        if ( $request->password == true ) 
            Session::flash('status', 'Thank you for editing your password');
        else 
            Session::flash('status', 'Type your new password');


        
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

        Session::flash('status', 'Thank you for uploading image');

        return redirect(action('UserController@index'));
        
    }

    public function profile(){
    	return view('profile', array('user' => Auth::user()) );
    }
}
