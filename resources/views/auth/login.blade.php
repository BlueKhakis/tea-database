@foreach ($errors->all() as $error)
    <div class="error">{{ $error }}</div>
@endforeach

<form class="form" action="{{ route('login') }}" method="post">
    @csrf
    
    <div class="title">Welcome</div>
    <div class="subtitle">For access let's login.</div>
    
    <div class="input-container ic2">
        <input type="email" name="email" value="{{ old('email') }}">
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</>
    </div>
 
    <input type="password" name="password" value="">
 
    <button>Login</button>

</form>

<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>Logout</button>
</form>