<a href='/'>Home</a> -> Types

<h1>{{$type[0]->name}} Teas</h1>

<ul>
@foreach($teas as $tea)
<li>
<a href={{ action('TeaController@show', $tea->id) }}>{{$tea->name}}</a>
</li>
@endforeach
</ul>