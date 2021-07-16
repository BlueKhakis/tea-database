@extends('layouts.main')
@section('content')

<div class="route">
    <a href='/'>Home</a> -> Basics
</div>

<div class="teas__all basic_styling_for_links ">
<h1>Basics</h1>
<h2>Get started</h2>
<div class="loremipsum">
   <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. At, perspiciatis. Unde, et itaque? Accusantium iure saepe officiis autem, deleniti voluptatibus velit maxime magni delectus suscipit harum eum aliquam culpa laboriosam!<br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla laborum quas vel fugit nesciunt non cumque? Harum dolorum cum eaque nulla officiis id saepe tempora ad adipisci! Beatae, repellendus ducimus?
    Esse quis repudiandae molestias quo quisquam dolores error cum vel culpa! Dolorum sed qui molestiae voluptates cumque soluta quis quam assumenda nulla perferendis beatae, delectus non sapiente dolor ipsam placeat?
    Ex distinctio quaerat sapiente, debitis animi saepe exercitationem odio iste possimus temporibus delectus veniam in facere numquam quidem, id velit, earum cumque omnis doloremque nam adipisci commodi quam suscipit. Placeat?
    Enim aspernatur pariatur incidunt distinctio nostrum ab optio fugiat mollitia quisquam vitae velit vel ipsum excepturi corporis et possimus ducimus eum, temporibus nemo dolorum quia eos ut consectetur omnis. Placeat.</p>
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