@extends('layouts.main')
@section('content')

<div class="route">
    <a href='/'>Home</a> -> Countries
</div>    

 <script>
            window.mapData = '{!! json_encode($countries) !!}';
        </script>

        <div style="background-color: rgba(113, 128, 185, 1);" class="main__home__section main__home__section__map"> 
        </div>

<script src="{{mix('js/map.js')}}">
        </script>

<div class="basic_styling user__page">    

    <div class="country_all country__card">
        <div class="country__card"> 
            <a  class="teas__all__ul__li__a" href='/countries/1'>China</a>
        </div>
        <div class="country__card"> 
            <a  class="teas__all__ul__li__a" href='/countries/2'>India</a>
        </div>
        <div>
            <div class="country__card"> 
                <a  class="teas__all__ul__li__a" href='/region/2'>Asia</a> 
            </div> 
            <div class="country__card"> 
                <a  class="teas__all__ul__li__a" href='/region/3'>Africa</a>
            </div>
        </div>
        <div>
            <div class="country__card"> 
                <a  class="teas__all__ul__li__a" href='/region/1'>South America</a>
            </div>
            <div class=" country__card"> 
                <a  class="teas__all__ul__li__a" href='/region/4'>Oceania</a>
            </div>
        </div>
    </div>

</div>

@endsection