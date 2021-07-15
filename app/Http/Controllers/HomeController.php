<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tea;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        Auth::user() ? $user = Auth::user() : $user = [];

        return view('home', compact('countries', 'user'));
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

    public function layout()
    {
        Auth::user() ? $user = Auth::user() : $user = [];
        return view('main.layout', compact('user'));
    }

    public function about()
    {
        return view('footer.about');
    }

    public function historytea()
    {
        return view('history.historytea');
    }
}
