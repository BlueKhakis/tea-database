@extends('layouts.main')
@section('content')
    

<div class="route">
    <a href='/'>Home</a>->Top-rated<br><br>
</div>


<h2>Teas by rating</h2>
<div class="teas__all basic_styling_for_links">
    <ul>
        @foreach ($teas as $tea)
            <li><a class="teas__all__ul__li__a"  href={{ action('TeaController@show', $tea->id) }}>{{$tea->name}} - {{$tea->average_rating}}</a></li>
        @endforeach
    </ul>

 
   
</div>
{{$teas->links()}}
@endsection