{{-- Register form - working well --}}



<form class="form" action="{{ route('register') }}" method="post">
  @csrf
  <div class="title">Welcome</div>
  <div class="subtitle">Let's create your account!<hr></div>
  <br>

  @foreach ($errors->all() as $error)
      <div class="error">{{ $error }}</div>
  @endforeach

  <div class="input-container ic1">
    <input id="name" name="name" class="input" type="text" placeholder=" " value="{{ old('name') }}"/>
    <div class="cut"></div>
    <label for="name" class="placeholder">Name</label>
  </div>
  <br>
  <div class="input-container ic2">
    <input id="email" name="email" class="input" type="text" placeholder=" " value="{{ old('email') }}"/>
    <div class="cut cut-short"></div>
    <label for="email" class="placeholder">Email</>
  </div>
  <br>
  <div class="input-container ic2">
    <input class="input" type="password" name="password" id="password" placeholder=" " />
    <div class="cut"></div>
    <label for="password" class="placeholder">Password</>
</div>
  <br>
  <div class="input-container ic2">
    <input class="input" type="password" name="password_confirmation" id="password_confirmation" placeholder=" " />
    <div class="cut"></div>
    <label for="password" class="placeholder">Confirm Password</>
</div>
  <br>
  <button class="submit">Register</button>
</form>


<style>

body {
align-items: center;
background-color: #000;
/* background-image: url('./img/30993.jpg'); */
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

</style>



{{-- 
<form action="{{ route('register') }}" method="post">
  @csrf

  <input type="text" name="name" value="{{ old('name') }}">

  <input type="email" name="email" value="{{ old('email') }}">

  <input type="password" name="password" value="">

  <input type="password" name="password_confirmation" value="">

  <button>Register</button>

</form> --}}

{{-- Register form with styling - Broaken - it does not save user data to database --}}

{{-- @foreach ($errors->all() as $error)
  <div class="error">{{ $error }}</div>
@endforeach


<form action="{{ route('register') }}" method="post">
  @csrf
<div class="form">
  <div class="title">Welcome</div>
  <div class="subtitle">Let's create your account!</div>
  <div class="input-container ic1">
    <input id="name" name="name" class="input" type="text" placeholder=" " value="{{ old('name') }}"/>
    <div class="cut"></div>
    <label for="name" class="placeholder">Name</label>
  </div>
  <div class="input-container ic2">
    <input id="lastname" name="lastname" class="input" type="text" placeholder=" " />
    <div class="cut"></div>
    <label for="lastname" class="placeholder">Last name</label>
  </div>
  <div class="input-container ic2">
    <input id="email" name="email" class="input" type="text" placeholder=" " value="{{ old('email') }}"/>
    <div class="cut cut-short"></div>
    <label for="email" class="placeholder">Email</>
  </div>

  <div class="input-container ic2">
      <input class="input" type="password" name="password" id="password" placeholder=" " />
      <div class="cut"></div>
      <label for="password" class="placeholder">Password</>
  </div>

  <div class="input-container ic2">
      <input class="input" type="password" name="password_confirmation" id="password_confirmation" placeholder=" " />
      <div class="cut"></div>
      <label for="password" class="placeholder">Confirm Password</>
  </div>
  {{-- <div class="input-container ic2">
      <input class="input" type="text" name="password" id="password"/>
      <label for="email" class="placeholder">Password</>
      <div class="cut cut-short"></div>
      <input class="input" type="password" name="password_confirmation" id="password" value=""/>
      
      <label for="email" class="placeholder">Password Confirm</>
  </div> 
  <button type="text" class="submit">Submit</button>
</div>
</form>
--}}
<style>
  body {
align-items: center;
background-color: #000;
display: flex;
justify-content: center;
text-align: center;
height: 100vh;
}




.form {
/* background-color: #15172b; */
border-radius: 20px;
box-sizing: border-box;
height: 70  0px;
padding: 20px;
width: 320px;

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
margin-top: 30px;
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
background-color: #303245;
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

.cut {
background-color: #15172b09;
border-radius: 10px;
height: 20px;
left: 20px;
position: absolute;
top: -20px;
transform: translateY(0);
transition: transform 200ms;
width: 76px;
}


.cut-short {
width: 50px;
}

.input:focus ~ .cut,
.input:not(:placeholder-shown) ~ .cut {
transform: translateY(8px);
background-color: #15172b;
}

.placeholder {
color: #65657b;
font-family: sans-serif;
left: 20px;
line-height: 14px;
pointer-events: none;
position: absolute;
transform-origin: 0 50%;
transition: transform 200ms, color 200ms;
top: 20px;
}

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
color: #808097;
}

.input:focus ~ .placeholder {
color: #dc2f55;
}

.submit {
background-color: rgba(51, 136, 216, 0.623);
border-radius: 12px;
border: 0;
box-sizing: border-box;
color: #eee;
cursor: pointer;
font-size: 20px;
height: 50px;
margin-top: 50px;
// outline: 0;
text-align: center;
width: 100%;
}

.submit:active {
background-color: #06b;
}

</style> 