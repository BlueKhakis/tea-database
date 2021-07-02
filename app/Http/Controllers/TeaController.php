<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tea;

class TeaController extends Controller
{
    public function index()
    {
        return  view('layouts.main');
    }


    public function store()
    {
        return  redirect('data.create');
    }
}
