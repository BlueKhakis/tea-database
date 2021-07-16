@extends('layouts.main')
@section('content')
<div class="route">
    <a href='/'>Home</a> -> Countries

</div class="basic_styling_for_links user__page">    

    <ul class="teas__all__ul">
        <li class="teas__all__ul__li"> 
            <a  class="teas__all__ul__li__a" href='/countries/1'>China</a>
        </li>
        <li class="teas__all__ul__li"> 
            <a  class="teas__all__ul__li__a" href='/countries/2'>India</a>
        </li>
        <li class="teas__all__ul__li"> 
            <a  class="teas__all__ul__li__a" href='/region/2'>Asia</a> <a  class="teas__all__ul__li__a" href='/region/3'>Africa</a>
        </li>
        <li class="teas__all__ul__li"> 
            <a  class="teas__all__ul__li__a" href='/region/1'>South America</a> <a  class="teas__all__ul__li__a" href='/region/4'>Oceania</a>
        </li>
    </ul>
    
</div>

@endsection