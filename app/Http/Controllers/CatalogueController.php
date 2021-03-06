<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Tea;
use App\Models\Catalogue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $teas = Tea::all();

        $lists = Catalogue::all();

        return view('user.listpage', compact('teas', 'user', 'lists'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $teas = Tea::all();

        $user = Auth::user();

        return view('user.createList', compact('teas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user())
        {
            $user = Auth::user();
        }
        else
        {
            return view('auth.login');
        }

        $catalogue = Catalogue::create([
            'name' => $request->name,
            'user_id' => $user->id
        ]);

        return redirect(action('CatalogueController@edit', $catalogue->id ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalogue = Catalogue::findOrFail($id);

        $teas = Tea::all();

        $user = Auth::user();


        return view('user.editlist', compact('id', 'teas', 'catalogue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd('base');
        if ($request->fromShow === 'yes')
        {
            // dd('A');
            $catalogue = Catalogue::findOrFail($id);
            
            $catalogue->update( ['name' => $request->name] );

            $tea = Tea::findOrFail($request->id);
            
            if($catalogue->tea->contains($tea)){
                // dd('A1');
                Session::flash('status', "tea already there");
                return redirect(action('TeaController@show', $tea->id));
            }
            // dd('A2');
            Session::flash('status', 'you added '.$tea->name.' to '.$catalogue->name);
            $catalogue->tea()->attach($tea);
            return redirect(action('TeaController@show', $tea->id));
        }
    }
    

    public function updateDelete($tea_id, $catalogue_id)
    {

        $catalogue = Catalogue::findOrFail($catalogue_id);
        
        $tea = Tea::findOrFail($tea_id);

        $catalogue->tea()->detach($tea);

        return redirect(action('CatalogueController@edit', $catalogue->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalogue = Catalogue::findOrFail($id);
        $catalogue->delete();

        return redirect(action('UserController@index'));
    }
}
