@extends('layouts.main')

@section('content')


<a href='/'>Home</a> -> Types
<div class="teas__all basic_styling_for_links ">
<h1>{{$type[0]->name}} Teas</h1>

<ul>
@foreach($teas as $tea)
<li>
<a href={{ action('TeaController@show', $tea->id) }}>{{$tea->name}}</a>
</li>
@endforeach
</ul>
</div>
@endsection