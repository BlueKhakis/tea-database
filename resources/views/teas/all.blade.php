@extends('layouts.main')
@section('content')



@if(isset($country))
<a href='/'>Home</a> -> <a href='/countries'>Countries</a>->{{$country[0]->name}}
@else
<a href='/'>Home</a> -> Teas
@endif


@if(isset($country))
<h1>{{$country[0]->name}}</h1>
@endif
    
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
        <a href="">Log in to add a tea</a>
    </button>
@endif

@endsection