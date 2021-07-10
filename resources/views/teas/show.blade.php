@extends('layouts.main')

@section('content')



<div><a href='/'>Home</a> -> <a href='/countries'>Countries</a>-><a href='/countries/{{$country[0]->id}}'>{{$country[0]->name}}</a>->{{$tea->name}}</div>
<div><a href='/'>Home</a> -> <a href='/types'>Types</a>-><a href='/type/{{$type[0]->id}}'>{{$type[0]->name}}</a>->{{$tea->name}}</div>


    <h1>{{$tea->name}}</h1>

    @if ($tea->description)

        <div>Description</div>
        <div>{{$tea->description}}</div>

    @endif

    <div>Review</div>
    
    @if (Auth::user())

    <form method='post' action="{{action('ReviewController@create', $tea)}}" name='review'>
    @csrf
    <textarea rows=5 cols=30 name="text"></textarea>
    
    <input type="number" name="rating" min="0" max="10">
    <input type="submit" value="submit">
    </form>
{{-- {{dd($reviews)}} --}}

    @else <span>Need to be logged in to add a review</span>

    @endif
    
    @if(count($reviews) === 0)
        <div>This tea has not been reviewed yet. <br/> Start a trend and review it now.</div>
    @else
        @if (Auth::user())
            <div>Your words of wisdom:</div>
            <ul>
                @foreach ($reviews as $review)
                    @if ($review->user_id === Auth::user()->id)
                        <li>{{$review->text}} <button><a href={{ action('ReviewController@edit', $review->id) }}>edit</a></button></li>
                    @endif
                @endforeach
            </ul>
        @endif

            <div>Recent reviews:</div>
            <ul>
                @foreach ($reviews as $review)
                    <li>{{$review->text}}</li>
                @endforeach
            </ul>
    @endif 

    {{-- Temporary Upload Files Form --}}
    <form class="form_upload" action={{ action('UserController@store') }} method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button class="button button--confirm-save">Upload Image</button>
    </form>

    <div>Rating</div>
    {{$tea->average_rating}}/10 ({{$number_of_votes}} votes)
<br>
<br>
    Add this tea to a list
    <form action={{ action('CatalogueController@update', $tea->id) }} method="post">
    @method('PUT')
    @csrf
    <input type="hidden" name="fromShow" value=1>

    <select name = "catalogue_id">
@foreach ($catalogues as $catalogue)
            <option value = {{$catalogue->id}}> {{$catalogue->name}}</option>
            @endforeach
</select>
<input type="submit" value="submit">
</form>
@if (session('status'))
    {{session('status')}}
    @endif

@endsection