

@section('username')
Edit user name

<form method="post" action={{ action('UserController@edit') }}>
    @method('PUT')
    @csrf

    edit Password
    <input type="password" name="password" id="">
<input type="submit" value="Submit">
</form>
@endsection

{{-- edit Img ()

make new List

edit List

see Reviews --}}

