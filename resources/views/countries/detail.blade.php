@extends('layouts.main')
@section('content')



@if(isset($country))
<a href='/'>Home</a> -> <a href='/countries'>Countries</a>-><a href='/region/{{$region[0]->id}}'>{{$region[0]->name}}</a>->{{$country[0]->name}}
@else
<a href='/'>Home</a> -> Teas
@endif


@if(isset($country))
<h1>{{$country[0]->name}}</h1>
@endif


@if (sizeof($teas) > 0)
    <ul>
@foreach ($teas as $tea)
    <li> 
        <a href={{action('TeaController@show', $tea->id)}}>{{$tea->name}}</a>
    </li>
@endforeach
    </ul>
    @else
<br>

No teas from {{$country[0]->name}} in our database yet!
<br>
@endif

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