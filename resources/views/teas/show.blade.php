@extends('layouts.main')

@section('content')
    <h1>{{$tea->name}}</h1>

    Review
    
    @if (Auth::user());

    <form method='post' action="{{action('ReviewController@create', $tea)}}" name='review'>
    @csrf
    <textarea rows=5 cols=30 name="text"></textarea>
    
    <input type="number" name="rating">
    <input type="submit" value="submit">
    </form>

    @else <span>Need to be login</span>

    @endif
    

    Rating
    
    {{$tea->average_rating}}/10
@endsection