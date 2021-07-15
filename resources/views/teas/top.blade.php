@extends('layouts.main')
@section('content')
    


<a href='/'>Home</a>->Top-rated<br><br>

Teas by rating

<ul>
@foreach ($teas as $tea)
<li><a href={{ action('TeaController@show', $tea->id) }}>{{$tea->name}} - {{$tea->average_rating}}</a></li>
@endforeach
</ul>

{{$teas->links()}}

@endsection