@extends('layouts.main')

@section('content')
<div class="route">
    <a href='/'>Home</a> -> <a href='/countries'>Countries</a>->{{$region[0]->name}}
</div>

        <h1>{{$region[0]->name}}</h1>
<div>
    <div class="teas__all basic_styling_for_links ">

        @if (sizeof($countries) > 0)
            <ul>
                @foreach($countries as $country)
                    <li>
                        <a href={{ action('CountryController@show', $country->id) }}>{{$country->name}}</a>
                    </li>
                @endforeach
            </ul>
        @else
            <br>
                No countries from {{$region[0]->name}} in our database yet!
        @endif
    </div>        

    <div class='map main__home__section main__home__section__map' style="width: 1136px; height:500px; background-color: rgba(113, 128, 185, 0.8);"></div>

    <script>
        window.mapData = '{!! json_encode([$countries, $region]) !!}';
    </script>

        <script src="{{mix('js/continent.js')}}"></script>
 
</div>
@endsection