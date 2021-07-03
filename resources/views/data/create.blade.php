@extends('layouts.main')
@section('content')
    
    <form action="{{ action('TeaController@store') }}">
    @csrf

    <label htmlfor="">brand name</label>
    <input type="text" name="name">
    
    
    
    </form>

@endsection

