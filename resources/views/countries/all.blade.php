@extends('layouts.main')
@section('content')
<div>
    <a href='/'>Home</a> -> Countries
</div>
{{-- <ul> --}}
{{-- @foreach ($regions as $region)
    <li>{{$region->name}}</li>
    @endforeach
    </ul> --}}
    
    <ul>
        <li> 
            <a href='/countries/1'>China</a>
        </li>
        <li> 
            <a href='/countries/2'>India</a>
        </li>
        <li> 
            <a href='/region/2'>Asia</a> <a href='/region/3'>Africa</a>
        </li>
        <li> 
            <a href='/region/1'>South America</a> <a href='/region/4'>Oceania</a>
        </li>
    </ul>

{{-- @if (Auth::user())
   <button>
       <a href={{action('CountryController@create')}}>Extend our database, add a new tea</a>
    </button>
@else
    <button>
        <a href="">Log in to add a country</a>
    </button>
@endif --}}

@endsection