@extends('layouts.main')

@section('content')
    <h1>{{$tea->name}}</h1>

    <div>Review</div>
    
    <form method='post' action="{{action('ReviewController@create', $tea)}}" name='review'>
    @csrf
    <textarea rows=5 cols=30 name="text"></textarea>
    
    <input type="number" name="rating">
    <input type="submit" value="submit">
    </form>

    <div>Rating</div>
    {{$tea->average_rating}}/10
    @endsection