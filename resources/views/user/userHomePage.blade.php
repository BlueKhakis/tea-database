
{{-- <nav class="navi">
    @extends('layouts.main')
</nav> --}}

@extends('layouts.main')

@section('content')


<main>
<div class="form">
    <div class="title">{{ $user->name }}</div>

    <div class="subtitle">Edit your info<hr></div>

<img class="user_profile_pic" src="{{$user->image}}">

{{-- <div class="thanks">
@if (session('status'))
{{session('status')}}
@endif
</div> --}}

{{-- User can change UserName --}}
<div class="input-container ic2">
<form method="post" action={{ action('UserController@userNameUpdate2') }}>
    @method('PUT')
    @csrf
    <label for="name" class="placeholder">Edit User Name</label>
    <input class="input" type="text" name="name" placeholder="{{ $user->name }}">
    <input class="submit" type="submit" value="Submit">
</form>
</div>



{{-- User can edit email --}}
<div class="input-container ic2">
<form method="post" action={{ action('UserController@userEmailUpdate') }}>
    @method('PUT')
    @csrf
    <label for="editname" class="placeholder">Edit User E-mail</><br>
        <input id="email" name="email" class="input" value="{{ old('email') }}" type="email" placeholder="{{ $user->email }}" /><br>
<input class="submit" type="submit" value="Submit">
</form>
</div>

{{-- Edit user password --}}
<div class="input-container ic2">
<form method="post" action={{ action('UserController@edit') }}>
    @method('PUT')
    @csrf

    <label for="editname" class="placeholder">Edit User Password</><br>
    <input class="input" type="password" name="password" id="" placeholder=""><br>
<input class="submit" type="submit" value="Submit">
</form>
</div>


{{-- Upload a files (PROFILE PICTURE) --}}
<form class="form_upload" action={{ action('UserController@store') }} method="post" enctype="multipart/form-data">
    <div class="input-container ic2">
        @csrf
    <label for="editname" class="placeholder">Add image</><br>
    <input class="upload" id="upload" type="file" name="image">
    <button class="submit button button--confirm-save">Upload</button>
</form>

</div>



</main>
<a href="/lists"><h3>Lists</h3></a>
<a href="/reviews"><h3>Reviews</h3></a>
<style>
      main {
align-items: center;
background-color: #000;

display: flex;
justify-content: center;

}






.form {
background-color: rgba(113, 128, 185, 0.8);
/* background-color: rgba(54, 142, 102, 0.8); */
border-radius: 20px;
box-sizing: border-box;
height: 450px;
padding: 20px;
width: 320px;
text-align: center;

/* background-color: rgba(172, 172, 172, 0.226); */
    box-shadow: 0px 0px 5px 0px rgba(255, 255, 255, 0.37);
    color: rgb(255, 255, 255);
    margin: 1em;
    padding: 1em;
    transition: all 0.2s ease-out;
}

.form:hover {
    box-shadow: 0px 0px 30px 2px rgba(255, 255, 255, 0.37);
}


.user_profile_pic {
    border-radius: 50%;
    margin-bottom: -40px;
}

.title {
color: #eee;
font-family: sans-serif;
font-size: 36px;
font-weight: 600;

}

.subtitle {
color: #eee;
font-family: sans-serif;
font-size: 16px;
font-weight: 600;
margin-top: 10px;
}

.error {
color: #eee;
font-family: sans-serif;
font-size: 16px;
font-weight: 600;
margin-top: 10px;
}

.password {
color: #eee;
font-family: sans-serif;
font-size: 16px;
font-weight: 600;
margin-top: 10px;
}

.input-container {
height: 50px;
position: relative;
width: 100%;
}

.input-container {
height: 50px;
position: relative;
width: 100%;
}

.ic1 {
margin-top: 40px;
}

.ic2 {
margin-top: 30px;
}

.input {
background-color: #30324533;
box-shadow: inset 0px 0px 10px 2px rgba(255, 255, 255, 0.37);
border-radius: 12px;
border: 0;
box-sizing: border-box;
color: #eee;
font-size: 18px;
height: 100%;
outline: 0;
padding: 4px 20px 0;
width: 100%;
}

.input:hover {
    box-shadow: 0px 0px 30px 2px rgba(255, 255, 255, 0.37);
}

.thanks {
    font-size: 18px;
    box-shadow: inset 0px 0px 10px 2px rgba(255, 255, 255, 0.37);
    color: rgb(255, 255, 255);
    border-radius: 20px;
    margin-bottom: -50px;
}

.placeholder {
color: #ffffff;
font-family: sans-serif;
bottom: 30px;

transform-origin: 0 50%;
transition: transform 200ms, color 200ms;
}

.submit {
    background-color: rgba(51, 136, 216, 0.096);
border-radius: 12px;
border: 1;
box-sizing: border-box;
color: #eee;
cursor: pointer;
font-size: 18px;
height: 30px;
// outline: 0;
text-align: center;
width: 70%;
}

.submit:hover {
    background-color: rgba(51, 136, 216, 0.418);
}

#file {
    background-color: #30324556;
box-shadow: inset 0px 0px 10px 2px rgba(255, 255, 255, 0.37);
border-radius: 12px;
border: 0;
box-sizing: border-box;
color: #eee;
font-size: 18px;
height: 100%;
outline: 0;
padding: 4px 20px 0;
width: 100%;
}



</style>

    
@endsection