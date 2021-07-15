@extends('layouts.main')
@section('content')


<div className="route">
    @if(isset($country))
        <a href='/'>Home</a> -> <a href='/countries'>Countries</a>->{{$country[0]->name}}
    @else
        <a href='/'>Home</a> -> Teas
    @endif
</div>

@if(isset($country))
<h1>{{$country[0]->name}}</h1>
@endif
    
<div className="teas__all basic_styling_for_links ">
        <ul className="teas__all__ul">
            @foreach ($teas as $tea)
                <li> 
                    <a href={{action('TeaController@show', $tea->id)}}>{{$tea->name}}</a>
                </li>
            @endforeach
        </ul>
        <div className="teas__all__content"></div>
</div>
    {{$teas->links()}}

@if (Auth::user())
   <button>
       <a href={{action('TeaController@create')}}>Extend our database, add a new tea</a>
    </button>
@else
    <button>
        <a href="{{ route('login') }}">Log in to add a tea</a>
    </button>
@endif

@endsection