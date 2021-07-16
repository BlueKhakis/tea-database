@extends('layouts.main')
@section('content')


<div class="route">
    @if(isset($country))
        <a href='/'>Home</a> -> <a href='/countries'>Countries</a>->{{$country[0]->name}}
    @else
        <a href='/'>Home</a> -> Teas
    @endif
</div>

@if(isset($country))
<h1>{{$country[0]->name}}</h1>
@endif
    
<div class="teas__all basic_styling_for_links ">
        <ul class="teas__all__ul">
            @foreach ($teas as $tea)
                <li class="teas__all__ul__li"> 
                    <a class="teas__all__ul__li__a" href={{action('TeaController@show', $tea->id)}}>{{$tea->name}}</a>
                </li>
            @endforeach
        </ul>
        <div class="teas__all__content"></div>
</div>
    {{$teas->onEachSide(3)->links()}}

@if (Auth::user())
   <button class="button white">
       <a  class="white" href={{action('TeaController@create')}}>Extend our database, add a new tea</a>
    </button>
@else
    <button class="button white">
        <a class="white" href="{{ route('login') }}">Log in to add a tea</a>
    </button>
@endif

@endsection