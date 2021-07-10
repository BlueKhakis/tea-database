

<nav>
    <div class="navigation">
       <a href="/"><img src={{asset('img/teapot.png')}} alt="logo" width="150" height="100"></a>

    <a href={{action('TypeController@index')}}>Types</a>
    <a href={{action('CountryController@index')}}>Countries</a>
    <a href={{action('TeaController@top')}}>Top-rated</a>
   

    {{-- Searchbar - open on click --}}
    <head>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    </head>
    <!-- <div class="search-box">
        <button class="btn-search"><i class="fas fa-search"></i></button>
        <input type="text" class="input-search" placeholder="Search your Tea..">
      </div> -->
      <div id='search'>
      <!-- <script src= asset(js/search)> -->
      </div>

    <div class="dropdown">
        <button class="dropbtn">User</button>
        <div class="dropdown-content">
          
            @auth
          <a href="#">Favorites</a>
          <a href="#">Something</a>
          
        <div>
          <a href="/account">Account</a>
        </div>  
          

              <form action="{{ route('logout') }}" method="post">
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

{{-- As I mentioned before I am not sure how to style this project
so I use styling in blade <style>Magic</style> --}}

<style>
    * {
        box-sizing: border-box;
    }

    html {

    margin: 0;
    padding: 0;
}

    .navigation {
        font-size: 1.5em;
        width: 100%;
        height: 100px;
        background-color: rgb(204, 204, 204);
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        margin: 0;
        padding: 0;
        border-radius: 15px;
    }

    a {
        color: rgb(97, 97, 97);
        background-color: rgba(0,0,0,0.2)
        text-decoration: none;
    }

    .dropdown-content a {
        color: aqua;
        text-decoration: none;
        font-size: 16px;
    }
    a:hover {
        color: rgba(46, 47, 66, 0.959);
        text-decoration: none;
    }

    .search_form {
        color: #3e8e41;
        border-radius: 3rem;
        font-size: 20px;
    }

    img {
        border-radius: 3px;
        width: auto;
    }

    .dropdown form button {
      border: none;
      background-color: inherit;
      font-size: 16px;
      cursor: pointer;
      display: inline-block;
    }

    /* Dropdown Button */
.dropbtn {
  background-color: #22a6b3;
  color: white;
  padding: 16px;
  font-size: 20px;
  width: 100px;
  border: none;
  border-radius: 2px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #ffffff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: rgb(221, 252, 234);}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #22a7b3b0;}


/* Styling the Best Searchbar */
.search-box{
  width: fit-content;
  height: fit-content;
  position: relative;
}
.input-search{
  height: 50px;
  width: 50px;
  border-style: none;
  padding: 10px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 25px;
  transition: all .5s ease-in-out;
  background-color: #22a6b3;
  padding-right: 40px;
  color:#fff;
}
.input-box:hover > .input-search {background-color: rgb(30, 32, 31);}

.input-search::placeholder{
  color:rgba(255, 255, 255, 0.822);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 100;
}
.btn-search{
  width: 50px;
  height: 50px;
  border-style: none;
  font-size: 20px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 0px;
  color:#ffffff ;
  background-color:transparent;
  pointer-events: painted;  
}
.btn-search:focus ~ .input-search{
  width: 300px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 300px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}

.results{
  position: absolute;
}
</style>
