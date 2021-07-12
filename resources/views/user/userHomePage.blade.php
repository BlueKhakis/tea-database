

{{-- @extends('layouts.main') --}}

<div class="form">
    <div class="title">User Space</div>

    <div class="subtitle">Something about page...<hr></div>

<div class="thanks">
@if (session('status'))
{{session('status')}}
@endif
</div>

{{-- User can change UserName --}}
<div class="input-container ic2">
<form method="post" action={{ action('UserController@userNameUpdate2') }}>
    @method('PUT')
    @csrf
    <label for="name" class="placeholder">Edit User Name</label>
    <input class="input" type="text" name="name" >
    <input class="submit" type="submit" value="Submit">
</form>
</div>



{{-- User can edit email --}}
<div class="input-container ic2">
<form method="post" action={{ action('UserController@userEmailUpdate') }}>
    @method('PUT')
    @csrf
    <label for="editname" class="placeholder">Edit User E-mail</><br>
        <input id="email" name="email" class="input" value="{{ old('email') }}" type="email" placeholder=" " /><br>
<input class="submit" type="submit" value="Submit">
</form>
</div>

{{-- Edit user password --}}
<div class="input-container ic2">
<form method="post" action={{ action('UserController@edit') }}>
    @method('PUT')
    @csrf

    <label for="editname" class="placeholder">Edit User Password</><br>
    <input class="input" type="password" name="password" id=""><br>
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


<style>
      body {
align-items: center;
background: url('./img/30993.jpg') no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
background-repeat: no-repeat; 
display: flex;
justify-content: center;

height: 100vh;
box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
}


.form {
/* background-color: #15172bb2; */
border-radius: 20px;
box-sizing: border-box;
height: 750px;
padding: 20px;
width: 320px;
text-align: center;
display: flex;
justify-content: center;
flex-direction: column;
gap: 35px; 


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

