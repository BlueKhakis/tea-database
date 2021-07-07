<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tea;
use App\Models\Brand;
use App\Models\Catalogue;
use App\Models\Country;
use App\Models\Plantation;
use App\Models\Type;
use App\Models\Review;
use Illuminate\Support\Facades\Session;


class TeaController extends Controller
{
    public function index()
    {
        $teas = Tea::all();
        return view('teas.all', compact('teas'));
    }

    public function top()
    {
        $teas = Tea::orderBy('average_rating', 'desc')->get();
        return view('teas.top', compact('teas'));
    }

    
    public function create()
    {
        

        $types = Type::orderBy('name')->get();
        $countries = Country::orderBy('name')->get();
        $brands = Brand::orderBy('name')->get();
        $plantations = Plantation::orderBy('name')->get();

        return view('teas.create', compact('types', 'countries', 'brands', 'plantations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type_id' => 'required',
            'brand_id' => 'required',
            'country_id' => 'required',
            'plantation_id' => 'required',
        ]);

        $tea = Tea::create($request->all());


        Session::flash('status', 'Thank you for enriching the database');

        

        return redirect(action('TeaController@show', $tea));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tea = Tea::findOrFail($id);
        $reviews = Review::where('tea_id', $id)->get();

        $catalogues = Catalogue::all();

        return view('teas.show', compact('tea', 'reviews', 'catalogues'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $catalogue = Catalogue::findOrFail($id);
        $catalogue->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
