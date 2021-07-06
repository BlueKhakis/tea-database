@extends('layouts.main')
@section('content')
    

    {{-- {{dd($review)}} --}}
    <h2>So you've changed your mind, huh?..</h2>
    <h3>No worries, we all make mistakes</h3>
    <h5>(your parents would know..)</h5>

    <div>
        <form action={{action('ReviewController@update', $review->id)}} method="post">
        @csrf
        @method('PUT')
{{-- {{dd($review->text)}} --}}
            <p>Edit here:</p> 
            <div>
                <label htmlFor="">Text</label>
                <input type="text" name="text" value="{{$review->text}}">
            </div>
            <div>
                <label htmlFor="">Rating</label>
                <input type="number" name="rating" value={{$review->rating}}>
            </div>

            <input type="submit" value="update pls">
        </form>
    </div>

@endsection