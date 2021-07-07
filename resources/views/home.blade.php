@extends('layouts.main')

@section('content')
@if (Auth::user())
    
<h1>Welcome {{Auth::user()->name}}</h1>

@else
    <h1>welcome guest</h1>
@endif

Main browsing page
    <br>
    <a href='/countries/1'>China</a>
    <br>
    <a href='/countries/2'>India</a>
    <br>
    Feel like a sophisticated cunt with our best english breakfast teas
    <br>
    Rest of Asia South America
    <br>
    Africa Oceania


@endsection