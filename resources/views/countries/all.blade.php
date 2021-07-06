@extends('layouts.main');
@section('content')
    
    <ul>
@foreach ($countries as $country)
    <li> 
        <a href={{action('CountryController@show', $country->id)}}>{{$country->name}}</a>
    </li>
@endforeach
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