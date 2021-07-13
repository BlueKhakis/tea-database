

<nav class="nav">
    <div class="nav__navigation">
       <a  href="/"><img class="nav__navigation__image" src={{asset('img/teapot.png')}} alt="logo" width="150" height="100"></a>
      
        <a class="nav__navigation__link" href={{action('TeaController@index')}}>Teas</a>
        <a class="nav__navigation__link" href={{action('CountryController@index')}}>Countries</a>
        <a class="nav__navigation__link" href={{action('TeaController@top')}}>Top-rated</a>
   
      <div id='search'></div>

    {{-- Searchbar - open on click --}}
    <div class="dropdown">
        <button class="dropbtn">User</button>
        <div class="dropdown-content">
          
            @auth
          <a class="nav__navigation__link" href="#">Favorites</a>
          <a class="nav__navigation__link" href="#">Something</a>
          
        <div>
          <a class="nav__navigation__link" href="/userpage">
            <div class="user__button">
              <img class="nav__user__image" src="{{asset(Auth::user()->image)}}" alt="">
              <p>Account</p>
            </div> 
          </a>
        </div>  
          

              <form class="logout__form" action="{{ route('logout') }}" method="post">
                @csrf
                <button>Logout</button>
              </form>

            @endauth
             @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
      </div>

    </div>

</nav>
