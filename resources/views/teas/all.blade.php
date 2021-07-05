@extends('layouts.main');
@section('content')
    
    <ul>
@foreach ($teas as $tea)
    <li> 
        <a href={{action('TeaController@show', $tea->id)}}>{{$tea->name}}</a>
    </li>
@endforeach
    </ul>

@endsection