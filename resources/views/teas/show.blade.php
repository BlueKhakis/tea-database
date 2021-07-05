@extends('layouts.main')

@section('content')
    <h1>{{$tea->name}}</h1>

    <div>Review</div>
    
    <form method='post' action="{{action('ReviewController@create', $tea)}}" name='review'>
    @csrf
    <textarea rows=5 cols=30 name="text"></textarea>
    
    <input type="number" name="rating">
    <input type="submit" value="submit">
    </form>
{{-- {{dd($reviews)}} --}}

    

    @if(count($reviews) === 0)
        <div>This tea has not been reviewed yet. <br/> Start a trend and review it now.</div>
    @else
        @if (Auth::user())
            <div>Your words of wisdom:</div>
            <ul>
                @foreach ($reviews as $review)
                    @if ($review->user_id === Auth::user()->id)
                        <li>{{$review->text}}</li>
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



    <div>Rating</div>
    {{$tea->average_rating}}/10
    @endsection