@extends('layouts.main')

{{-- @include('navigation.navigation') --}}

 @section('content')
     

    {{-- <div class="title-of-team">
            <h1>Let's introduce team members</h1>
        </div> --}}

    <div class="team">

   

    <div class="team__members">
        <div class="team__member__one">
            <div class="team__member__one__img">

            </div>
                <h1>
                    Jonathan Barron
                </h1>
            <h5>
                Dog Ein in  the Hood
            </h5>
        </div>

        <div class="team__member__two">
            <div class="team__member__two__img">
                
            </div>
                <h1>
                    Peter Kavulok
                </h1>
            <h5>
                Dog Zwei in the Hood
            </h5>

        </div>

        <div class="team__member__three">
            <div class="team__member__three__img">

            </div>
                <h1>
                    Tomas Glezl
                </h1>
            <h5>
                Dog Drei in the Hood
            </h5>


        </div>
    </div>
</div>
@endsection
<style>

* {
    box-sizing: border-box;
}

    .title-of-team {
        text-align: center;
        
    }

    .team {
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        /* background-image: url("/img/811964.jpg"); */
        background-size: cover;
       text-align: center;
    }

    .team__members {
       display: flex;
      width: 70vw;
      height: 50vh;
       align-items: center;
       justify-content: center;
       gap: 50px;
       background-color: rgba(172, 172, 172, 0.226);
    box-shadow: 0px 0px 5px 0px rgba(255, 255, 255, 0.37);
    color: rgb(255, 255, 255);
    margin: 1em;
    padding: 1em;
    transition: all 0.2s ease-out;
    }

    .team__members:hover {
        box-shadow: 0px 0px 30px 2px rgba(255, 255, 255, 0.37);
        width: 72vw;
        height: 52vh;
    }

    .team__member__one {
        background-image: url("/img/hidethepainharold.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        zoom: 100%;
        height: 30rem;
        width: 35rem;
        background-color: rgba(172, 172, 172, 0.226);
        box-shadow: 0px 0px 5px 0px rgba(255, 255, 255, 0.37);
        color: rgb(27, 51, 117);
        margin: 1em;
        padding: 1em;
        transition: all 0.2s ease-out;
        box-shadow: inset 0px 0px 10px 2px rgba(255, 255, 255, 0.37);
        border-radius: 12px;
    }

    .team__member__two {
          background-image: url("/img/hide-the-pain-harold.jpg");
        /* background-size: 600px 600px; */
        background-size: auto;
        background-position: center;
        background-size: cover;
        height: 30rem;
        width: 35rem;
        color: rgb(0, 0, 0);
        box-shadow: inset 0px 0px 10px 2px rgba(255, 255, 255, 0.37);
        border-radius: 12px;
    }

    .team__member__three {
        background-image: url("/img/5b0821d415e9f917c2730963.jpg");
        /* background-size: 600px 600px; */
        background-size: auto;
        /* background-position: center; */
        background-position-x: right 45px;
        background-size: cover;
        height: 30rem;
        width: 35rem;
        color: rgb(27, 51, 117);
        box-shadow: inset 0px 0px 10px 2px rgba(255, 255, 255, 0.37);
        border-radius: 12px;
        
    }

    
 
</style>