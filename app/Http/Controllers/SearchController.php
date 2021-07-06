<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tea;

class SearchController extends Controller
{
    public function search(Request $request, $query)
    {
        $teas = Tea::where('name','like', '%' . $query . '%')->get();
        return $teas; 
    }
}
