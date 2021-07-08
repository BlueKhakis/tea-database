
<a href='/'>Home</a> -> <a href='/countries'>Countries</a>->{{$region[0]->name}}

<h1>{{$region[0]->name}}</h1>



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
No countries in {{$region[0]->name}} yet!
@endif


<div class='map' style="width: 1136px; height:500px"></div>


<script>

window.mapData = '{!! json_encode([$countries, $region]) !!}';


</script>
<script src="{{mix('js/continent.js')}}"></script>