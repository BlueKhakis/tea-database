
{{$region[0]->name}}

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