@extends('layouts')

@section('upload')
    <form class="form_upload" action={{ action('UserController@store') }} method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <button class="button button--confirm-save">Upload Image</button>
    </form>
@endsection
