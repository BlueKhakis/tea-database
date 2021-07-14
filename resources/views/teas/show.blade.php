@extends('layouts.main')

@section('content')
 
<script>
window.user_reviews = '{!! addslashes(json_encode($user_reviews)) !!}';
</script>

    <div class="route">
        <div><a href='/'>Home</a> -> <a href='/countries'>Countries</a>-><a href='/countries/{{$country[0]->id}}'>{{$country[0]->name}}</a>->{{$tea->name}}</div>
        <div><a href='/'>Home</a> -> <a href='/types'>Types</a>-><a href='/type/{{$type[0]->id}}'>{{$type[0]->name}}</a>->{{$tea->name}}</div>
    </div>

    <h1 class="tea__name">{{$tea->name}}</h1>
    <div class="tea__desc__list">
        <div class="tea__desc__list__description">
            @if ($tea->description)

                <h3 class="tea__desc__list__description__headline">Description</h3>
                <div>{{$tea->description}}</div>

            @endif
        </div>

{{-- adding tea to a catalogue --}}
        <div class="tea__desc__list__catalogue text_align_right">
            @if($tea->image)

            <img class="tea_pic" src="{{ asset($tea->image) }}" alt="{{$tea->name}}">
            @endif

            <h3 class="tea__desc__list__description__headline">
                <span class="block">Average</span>
                <span class="block">rating</span> 
            </h3>
            <div>{{$tea->average_rating}}</div>
            <br>
            <h3 class="tea__desc__list__description__headline">
                <span class="block">Add this tea </span>
                <span class="block">to a list</span>
            </h3>
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
        </div>
    </div>

        <h3 class="review">Add a review</h3 class="review">
{{-- success // error messages start  --}}
        @if (session('status'))
            <p className="session__message">{{session('status')}}</p>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
{{-- success // error messages end  --}}

    @if (Auth::user())
{{-- create tea form --}}
    <form method='post' action="{{action('ReviewController@create', $tea)}}" name='review'>
    @csrf
        <div class="review__form__fields">
            <textarea rows=5 cols=60 name="text" placeholder="e.g. This tea has changed my life.."></textarea>
            <label htmlFor="rating">Rate this bad boy
                <input type="number" name="rating" class="review__form__fields__rating">
            </label>
            <input type="submit" value="submit" class="animate__animated ">
        </div>
    </form>


    @else <span class="message">Our sincerest apologies, fellow tea gourmet, in order to add a review, it is necessary to be logged in.</span>

    @endif
    
    @if(count($reviews) === 0)
        <div class="recent__reviews__header">This tea has not been reviewed yet. <br/> Start a trend and review it now.</div>
    @else
        @if (Auth::user())
            <div class="recent__reviews__header margin-top">Your words of wisdom:</div>
            <div id="react__reviews" class="margin-top"></div>
            <script>
                window.reactReviewsData = {tea_id: {{$tea->id}}}
            </script>

            {{-- old code to edit reviews using Laravel - substitute by react component --}}
            {{-- <ul>
                @foreach ($reviews as $review)
                    @if ($review->user_id === Auth::user()->id)
                        <li>{{$review->text}} <button><a href={{ action('ReviewController@edit', $review->id) }}>edit</a></button></li>
                        <li><button><a href={{ action('ReviewController@destroy', $review->id) }}>delete</a></button></li>
                    @endif
                @endforeach
            </ul> --}}
        @endif
            <div class="recent__reviews">
                <div class="recent__reviews__header">Recent reviews:</div>
                <ul>
                    @foreach ($reviews as $review)
                        <li>{{$review->text}}</li>
                    @endforeach
                </ul>
            </div>
    @endif 

    {{-- Temporary Upload Files Form --}}
    <form class="form_upload" action={{ action('TeaController@storeImage', $tea->id) }} method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button class="button button--confirm-save">Upload Image</button>
    </form>


@endsection