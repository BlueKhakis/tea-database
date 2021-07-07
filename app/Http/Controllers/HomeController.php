<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tea;

class HomeController extends Controller
{
    public function index()
    {

        return view('home');
    }

    public function browse()
    {

        return view('browse');
    }
    public function basics()
    {
        $teas = Tea::orderBy('average_rating', 'desc')->limit(6)->get();
        return view('basics', compact('teas'));
    }
}
