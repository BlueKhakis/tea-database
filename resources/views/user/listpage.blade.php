
@extends('layouts.main')

@section('content')

<body>

    <div class="route">
    <a href='/'>Home</a>-><a href='/userpage'>User</a>->Lists
    </div>
    
    <h1>Your Lists</h1>

    <main class="basic_styling_for_links user__page">
    

        <ul class="teas__all__ul">
            @foreach ($lists as $list)
                @if ($list->user_id === Auth::user()->id)
                    <li class="teas__all__ul__li"><a  class="teas__all__ul__li__a"  href="/editlist/{{$list->id}}">{{$list->name}}</a></li>
                @endif
            @endforeach
        </ul>
    </main>

    @endsection