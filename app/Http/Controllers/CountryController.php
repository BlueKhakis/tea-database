<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tea;
use App\Models\Brand;
use App\Models\Country;
use App\Models\Plantation;
use App\Models\Type;
use App\Models\Review;
use App\Models\Region;
use Illuminate\Support\Facades\Session;


class CountryController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        $countries = Country::all();
        return view('countries.all', compact('countries', 'regions'));
    }

    public function region($id)
    {
        $region = Region::where('id', $id)->get();
        $countries = Country::where('region_id', $id)->get();
        
        return view('countries.region', compact('countries', 'region'));
    }

    public function regionIndex($id)
    {
        $countries = Country::where('region_id', $id)->get();
        
        return view('countries.all', compact('countries', 'regions'));
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $country = Country::where('id', $id)->get();
       
        $teas = Tea::where('country_id', $id)->get();
        $region = Region::where('id', $country[0]->region_id)->get();

        return view('countries.detail', compact('teas', 'country', 'region'));
    }


    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
