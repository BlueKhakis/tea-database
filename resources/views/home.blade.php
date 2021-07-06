@extends('layouts.main')

@section('content')
@if (Auth::user())
    
<h1>Welcome {{Auth::user()->name}}</h1>

@else
    <h1>welcome guest</h1>
@endif


@endsection