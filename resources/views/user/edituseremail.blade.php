<form method="post" action={{ action('UserController@userEmailUpdate') }}>
    @method('PUT')
    @csrf

    edit Email
<input type="text" name="email" >
<input type="submit" value="Submit">
</form>