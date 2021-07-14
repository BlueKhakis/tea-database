<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tea;
use App\Models\Brand;

class SearchController extends Controller
{
    public function search(Request $request, $query)
    {
        $teas = Tea::where('name','like', '%' . $query . '%')->get();
        return $teas; 
    }

    public function searchBrands(Request $request, $query)
    {
        $brands = Brand::where('name','like', '%' . $query . '%')->get();
        return $brands; 
    }
}
