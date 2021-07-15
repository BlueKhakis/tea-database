@extends('layouts.main')
@section('content')
    

<div>
    <a href='/'>Home</a>->Top-rated<br><br>
</div>

<h2>Teas by rating</h2>

<ul>
@foreach ($teas as $tea)
<li><a href={{ action('TeaController@show', $tea->id) }}>{{$tea->name}} - {{$tea->average_rating}}</a></li>
@endforeach
</ul>

{{$teas->links()}}

@endsection