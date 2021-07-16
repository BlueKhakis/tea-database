
@extends('layouts.main')

@section('content')


    <div class="route">
        <a href='/'>Home</a>-><a href='/userpage'>User</a>->Reviews
    </div>
<h1>Your Reviews</h1>

    <?php use App\Models\Tea; ?>
    <div class="basic_styling_for_links user__page">
        <ul class="teas__all__ul">
            @foreach ($reviews as $review)
                @if ($review->user_id === Auth::user()->id)
                    <?php $tea = Tea::where('id', $review->tea_id)->get(); ?>
                        <li class="teas__all__ul__li"><a class="teas__all__ul__li__a" href="/show/{{$review->tea_id}}">{{$tea[0]->name}}</a></li>
                @endif
            @endforeach
        </ul>
    </div>
@endsection