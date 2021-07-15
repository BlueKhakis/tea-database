

Make new list
<br>
<form method='post' action={{ action('CatalogueController@store') }}>
@method('POST')
    @csrf
<input type="text" name="name">

<input type="hidden" name="user_id" value=''>
<input type="submit" value="submit">
</form>

