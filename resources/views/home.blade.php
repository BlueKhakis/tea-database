@extends('layouts.main')

@section('content')
    <main class="main__home">
{{-- 
    @if (Auth::user())
        <h1>Welcome {{Auth::user()->name}}</h1>
    @else
        <h1>welcome guest</h1>
    @endif --}}

        <div class="main__home__section main__home__section__map"> 
            <h2>Map here</h2>
            <p>map will be here</p>
        </div>


        <div class="main__home__section main__home__section__start"> 
            <h2>Get Started</h2>
            {{-- <a href={{ action('HomeController@basics') }}> teabag me</a> --}}
            <a href="/basics"> <div class="button"> teabag me</div></a>
        </div>

        <div class="main__home__section main__home__section__types"> 
            <div class="main__home__section__box">
                <h2 class="main__home__section__box__h2">types of tea</h2>
                <div class="main__home__section__box__types">
                        <div class="main__home__section__box__types__type">
                            <h3 class="main__home__section__box__types__type__header">Green</h3>
                        </div>
                        <div class="main__home__section__box__types__type">
                            <h3 class="main__home__section__box__types__type__header">White</h3>
                        </div>
                        <div class="main__home__section__box__types__type">
                            <h3 class="main__home__section__box__types__type__header">Black</h3>
                        </div>
                        <div class="main__home__section__box__types__type">
                            <h3 class="main__home__section__box__types__type__header">Yellow</h3>
                        </div>
                        <div class="main__home__section__box__types__type">
                            <h3 class="main__home__section__box__types__type__header">Idk</h3>
                        </div>
                        <div class="main__home__section__box__types__type">
                            <h3 class="main__home__section__box__types__type__header">The last one</h3>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <div class="main__home__section main__home__section__countries"> 
            <h2>Countries</h2>
            <a href="/basics"> <div class="button"> touch me </div></a>
        </div>

        <div class="main__home__section main__home__section__history"> 
            <h2>History</h2>
            <a href="/basics"> <div class="button"> Learn more </div></a>
        </div>

    </main>
@endsection