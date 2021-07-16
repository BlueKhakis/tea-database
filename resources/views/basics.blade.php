@extends('layouts.main')

@section('content')
<a href='/'>Home</a> -> Basics
<div class="teas__all basic_styling_for_links ">
<h1>Basics</h1>
<h2>Get started</h2>
<div class="loremipsum">
   <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. At, perspiciatis. Unde, et itaque? Accusantium iure saepe officiis autem, deleniti voluptatibus velit maxime magni delectus suscipit harum eum aliquam culpa laboriosam!<br>
</p>
</div>
    <br>

<h2>still not sure? try from our top-rated teas</h2>

Top 6 teas



<ul>
@foreach ($teas as $tea)
<li>{{$tea->name}} {{$tea->average_rating}}</li>
@endforeach
</ul>
</div>
@endsection