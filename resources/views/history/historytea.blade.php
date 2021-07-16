@extends('layouts.main')

{{-- @include('navigation.navigation') --}}
@section('content')
    

 <div class="">
     <div class="milestone">
         <div class="milestone__one">
             
            <div class="milestone__one__img">
                {{-- <img src="/img/Culture_and_Preparation_of_Tea.jpg" alt="tea"> --}}
            </div>
                
            <div class="milestone__one__text">
                <h3>Roots</h3>
                <p>The story of tea begins in China. According to legend, in 2737 BC, the Chinese emperor Shen Nung was sitting beneath a tree while his servant boiled drinking water, when some leaves from the tree blew into the water. ... The tree was a Camellia sinensis, and the resulting drink was what we now call tea.</p>
            </div>
         </div>

         <div class="milestone__two">
            <div class="milestone__two__img">
                {{-- <img src="/img/1200px-Boston_Tea_Party_w.jpg" alt=""> --}}
            </div>
                
            <div class="milestone__two__text">
                <h3>Boston Tea Party</h3>
                <p>The Boston Tea Party was a political protest that occurred on December 16, 1773, at Griffin’s Wharf in Boston, Massachusetts. American colonists, frustrated and angry at Britain for imposing “taxation without representation,” dumped 342 chests of tea, imported by the British East India Company into the harbor. The event was the first major act of defiance to British rule over the colonists. It showed Great Britain that Americans wouldn’t take taxation and tyranny sitting down, and rallied American patriots across the 13 colonies to fight for independence.</p>
            </div>
        </div>
            
        <div class="milestone__three">
             <div class="milestone__three__img"></div>
               
             <div class="milestone__three__text">
                  <h3>What about a Europe</h3>
                  <p>the beginnings of tea in Europe started slow. Marco Polo arrived on China’s shores in 1271 – but no tea was ever mentioned. The Arabs had dominated trade between China and the West and this monopoly wasn’t challenged until the Dutch established their first trading port on the island of Java and sent their first cargo of tea, by sea, to Amsterdam in 1606. It was for this reason that tea came to North America before England.</p>
             </div>
        </div>
     </div>
 </div>
 @endsection
 <style>

    .milestone__one {
        width: 100%;
        max-width: $body_width;
        height: auto;
        background-color: rgba(113, 128, 185, 0.8);
        box-shadow: 0px 0px 5px 0px rgba(255, 255, 255, 0.37);
        color: rgb(255, 255, 255);
        margin: 1em;
        padding: 1em;
        opacity: 0.9;
        transition: all 0.2s ease-out;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        gap: 10px;
        
    }

    .milestone__one:hover {
        /* // width: 81vw;
        height: 25.5em; */
        box-shadow: 0px 0px 30px 2px rgba(255, 255, 255, 0.37);
        opacity: 1;
    }

    .milestone__one__img {
        background-image: url("/img/Culture_and_Preparation_of_Tea.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        width: 300px;
        height: 300px;
    }

    .milestone__one__text {
        max-width: 40rem;
        color: rgb(255, 255, 255);
        text-shadow: 1px 1px rgb(85, 85, 85);
    }

    .milestone__two {
        width: 100%;
        max-width: $body_width;
        height: auto;
        background-color: rgba(113, 128, 185, 0.8);
        box-shadow: 0px 0px 5px 0px rgba(255, 255, 255, 0.37);
        color: rgb(255, 255, 255);
        margin: 1em;
        padding: 1em;
        opacity: 0.9;
        transition: all 0.2s ease-out;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        gap: 10px;
    }

    .milestone__two:hover {
        /* // width: 81vw;
        height: 25.5em; */
        box-shadow: 0px 0px 30px 2px rgba(255, 255, 255, 0.37);
        opacity: 1;
    }

    .milestone__two__img {
        background-image: url("/img/1200px-Boston_Tea_Party_w.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        width: 300px;
        height: 300px;
    }

    .milestone__two__text {
        max-width: 40rem;
        color: rgb(255, 255, 255);
        text-shadow: 1px 1px rgb(85, 85, 85);
    }

    .milestone__three {
        width: 100%;
        max-width: $body_width;
        height: auto;
        background-color: rgba(113, 128, 185, 0.8);
        box-shadow: 0px 0px 5px 0px rgba(255, 255, 255, 0.37);
        color: rgb(255, 255, 255);
        margin: 1em;
        padding: 1em;
        opacity: 0.9;
        transition: all 0.2s ease-out;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        gap: 10px;
    }

    .milestone__three:hover {
        /* // width: 81vw;
        height: 25.5em; */
        box-shadow: 0px 0px 30px 2px rgba(255, 255, 255, 0.37);
        opacity: 1;
    }

    .milestone__three__img {
        background-image: url("/img/overview-tea-drinking-world-China.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        width: 300px;
        height: 300px;
        background-position-x: left 125px;
    }

    .milestone__three__text {
        max-width: 40rem;
        color: rgb(255, 255, 255);
        text-shadow: 1px 1px rgb(85, 85, 85);
    }
 </style>