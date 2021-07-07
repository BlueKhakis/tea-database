<a href='/'>Home</a>->Top-rated

toptees cunt

<ul>
@foreach ($teas as $tea)
<li><a href={{ action('TeaController@show', $tea->id) }}>{{$tea->name}} - {{$tea->average_rating}}</a></li>
@endforeach
</ul>