@extends('layouts.main');
@section('content')
    
    <ul>
@foreach ($teas as $tea)
    <li> 
        <a href={{action('TeaController@show', $tea->id)}}>{{$tea->name}}</a>
    </li>
@endforeach
    </ul>

@if (Auth::user())
   <button>
       <a href={{action('TeaController@create')}}>Extend our database, add a new tea</a>
    </button>
@else
    <button>
        <a href="/login">Log in to add a tea</a>
    </button>
@endif

@endsection