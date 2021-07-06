Update list
<br>
<form method='post' action={{ action('CatalogueController@update', $id) }}>
@method('PUT')
    @csrf
<input type="text" name="name">
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
<li>{{$tea->name}}</li>
@endforeach
</ul>
