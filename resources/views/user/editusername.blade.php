<form method="post" action={{ action('UserController@userNameUpdate2') }}>
    @method('PUT')
    @csrf

    User Name
<input type="text" name="name" >
<input type="submit" value="Submit">
</form>