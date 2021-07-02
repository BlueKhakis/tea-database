@extends('layouts.main')
@section('content')
    
    <form action="{{ action('TeaController@store') }}">
    @csrf

    <label htmlfor="">tea name</label>
    <input type="text" name="name">
    
    
    
    </form>

@endsection

