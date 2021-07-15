Update list
<br>
<form method='post' action="{{ action('CatalogueController@update', $id) }}">
@method('PUT')
    @csrf
<input type="text" name="name" value="{{$catalogue->name}}">
<select name = "tea_id">
@foreach ($teas as $tea)
            <option value = {{$tea->id}}> {{$tea->name}}</option>
            @endforeach
</select>
<input type="hidden" name="user_id" value=''>
<input type="submit" value="submit">
</form>

<ul>
@foreach ($catalogue->tea as $tea)
<form action="{{ action('CatalogueController@updateDelete', [$tea->id, $catalogue->id]) }}" method="post">
@method('PUT')
    @csrf
<li>{{$tea->name}} <input type='submit' value='delete'></li>
</form>
@endforeach
</ul>
@if (session('status'))
    {{session('status')}}
    @endif

    <form method='post' action="{{ action('CatalogueController@destroy', $id) }}">
    @method('DELETE')
    @csrf
        <input type="submit" value="delete list">
    </form>