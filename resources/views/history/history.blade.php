{{-- @extends('layouts.main') --}}

@include('navigation.navigation')
<div class="history-header">
  <h1>History of a TEA</h1>

  <p>Milestones of journey of the tea.</p>
</div>
<div class="main__home__section">
<section class="carousel" aria-label="Gallery">
  <ol class="carousel__viewport">
    <li id="carousel__slide1"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper__1">
        <a href="#carousel__slide4"
           class="carousel__prev">Go to last slide</a>
        <a href="#carousel__slide2"
           class="carousel__next">Go to next slide</a>
      </div>
    </li>
    <li id="carousel__slide2"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper__2"></div>
      <a href="#carousel__slide1"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide3"
         class="carousel__next">Go to next slide</a>
    </li>
    <li id="carousel__slide3"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper__3"></div>
      <a href="#carousel__slide2"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide4"
         class="carousel__next">Go to next slide</a>
    </li>
    <li id="carousel__slide4"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper__4"></div>
      <a href="#carousel__slide3"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide1"
         class="carousel__next">Go to first slide</a>
    </li>
  </ol>
  <aside class="carousel__navigation">
    <ol class="carousel__navigation-list">
      <li class="carousel__navigation-item">
        <a href="#carousel__slide1"
           class="carousel__navigation-button">Go to slide 1</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide2"
           class="carousel__navigation-button">Go to slide 2</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide3"
           class="carousel__navigation-button">Go to slide 3</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide4"
           class="carousel__navigation-button">Go to slide 4</a>
      </li>
    </ol>
  </aside>
</section>
<div class="teaparty">
  <span>The Boston Tea Party was an American political and mercantile protest by the Sons of Liberty in Boston, Massachusetts, on December 16, 1773.[1] The target was the Tea Act of May 10, 1773, which allowed the British East India Company to sell tea from China in American colonies without paying taxes apart from those imposed by the Townshend Acts. The Sons of Liberty strongly opposed the taxes in the Townshend Act as a violation of their rights. Protesters, some disguised as American Indians, destroyed an entire shipment of tea sent by the East India Company.

    The demonstrators boarded the ships and threw the chests of tea into the Boston Harbor. The British government responded harshly, and the episode escalated into the American Revolution. The Tea Party became an iconic event of American history, and since then other political protests such as the Tea Party movement have referred to themselves as historical successors to the Boston protest of 1773.
    
    The Tea Party was the culmination of a resistance movement throughout British America against the Tea Act, which had been passed by the British Parliament in 1773. Colonists objected to the Tea Act because they believed that it violated their rights as Englishmen to "no taxation without representation", that is, to be taxed only by their own elected representatives and not by a British parliament in which they were not represented. In addition, the well-connected East India Company had been granted competitive advantages over colonial tea importers, who resented the move and feared additional infringement on their business. Protesters had successfully prevented the unloading of tea in three other colonies, but in Boston, embattled Royal Governor Thomas Hutchinson refused to allow the tea to be returned to Britain.[2]
    
    The Boston Tea Party was a significant event in the growth of the American Revolution. Parliament responded in 1774 with the Intolerable Acts, or Coercive Acts, which, among other provisions, ended local self-government in Massachusetts and closed Boston's commerce. Colonists up and down the Thirteen Colonies in turn responded to the Intolerable Acts with additional acts of protest, and by convening the First Continental Congress, which petitioned the British monarch for repeal of the acts and coordinated colonial resistance to them. The crisis escalated, and the American Revolutionary War began near Boston in 1775.</span>
  </span>
  </div>
</div>

<style>
.history-header {
  text-align: center;
}

.teaparty {
  color: black;
}
.main__home__section {
    width: 50vw;
    height: 50vh;
    background-color: rgba(172, 172, 172, 0.226);
    box-shadow: 0px 0px 5px 0px rgba(255, 255, 255, 0.37);
    color: rgb(255, 255, 255);
    margin: 1em;
    padding: 1em;
    transition: all 0.2s ease-out;
}

.main__home__section:hover {
    width: 51vw;
    height: 51vh;
    box-shadow: 0px 0px 30px 2px rgba(255, 255, 255, 0.37);
}

keyframes tonext {
  75% {
    left: 0;
  }
  95% {
    left: 100%;
  }
  98% {
    left: 100%;
  }
  99% {
    left: 0;
  }
}

@keyframes tostart {
  75% {
    left: 0;
  }
  95% {
    left: -300%;
  }
  98% {
    left: -300%;
  }
  99% {
    left: 0;
  }
}

@keyframes snap {
  96% {
    scroll-snap-align: center;
  }
  97% {
    scroll-snap-align: none;
  }
  99% {
    scroll-snap-align: none;
  }
  100% {
    scroll-snap-align: center;
  }
}

body {
  max-width: 54.5rem;
  margin: 0 auto;
  padding: 0 1.25rem;
  font-family: 'Lato', sans-serif;
}

* {
  box-sizing: border-box;
  scrollbar-color: transparent transparent; /* thumb and track color */
  scrollbar-width: 0px;
}

*::-webkit-scrollbar {
  width: 0;
}

*::-webkit-scrollbar-track {
  background: transparent;
}

*::-webkit-scrollbar-thumb {
  background: transparent;
  border: none;
}

* {
  -ms-overflow-style: none;
}

ol, li {
  list-style: none;
  margin: 0;
  padding: 0;
}

.carousel {
  position: relative;
  padding-top: 75%;
  filter: drop-shadow(0 0 10px #0003);
  perspective: 100px;
}

.carousel__viewport {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: flex;
  overflow-x: scroll;
  counter-reset: item;
  scroll-behavior: smooth;
  scroll-snap-type: x mandatory;
}

.carousel__slide {
  position: relative;
  flex: 0 0 100%;
  width: 100%;
  background-color: #f99;
  counter-increment: item;
}

.carousel__slide:nth-child(even) {
  background-color: #99f;
}

.carousel__slide:before {
  content: counter(item);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate3d(-50%,-40%,70px);
  color: #fff;
  font-size: 2em;
}

.carousel__snapper__1 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  scroll-snap-align: center;
  background-image: url("/img/Boston-Tea-Party-Facts.jpg");
  background-size: cover;
}

.carousel__snapper__2 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  scroll-snap-align: center;
  background-image: url("/img/1200px-Boston_Tea_Party_w.jpg");
  background-size: cover;
}

.carousel__snapper__3 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  scroll-snap-align: center;
  background-image: url("/img/Boston-Tea-Party-Harbor-Dec-16-1773.jpg");
  background-size: cover;
}

.carousel__snapper__4 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  scroll-snap-align: center;
  background-image: url("/img/625061_gettyimages-1053527588_0.jpg");
  background-size: cover;
}
@media (hover: hover) {
  .carousel__snapper {
    animation-name: tonext, snap;
    animation-timing-function: ease;
    animation-duration: 4s;
    animation-iteration-count: infinite;
  }

  .carousel__slide:last-child .carousel__snapper {
    animation-name: tostart, snap;
  }
}

@media (prefers-reduced-motion: reduce) {
  .carousel__snapper {
    animation-name: none;
  }
}

.carousel:hover .carousel__snapper,
.carousel:focus-within .carousel__snapper {
  animation-name: none;
}

.carousel__navigation {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  text-align: center;
}

.carousel__navigation-list,
.carousel__navigation-item {
  display: inline-block;
}

.carousel__navigation-button {
  display: inline-block;
  width: 1.5rem;
  height: 1.5rem;
  background-color: #333;
  background-clip: content-box;
  border: 0.25rem solid transparent;
  border-radius: 50%;
  font-size: 0;
  transition: transform 0.1s;
}

.carousel::before,
.carousel::after,
.carousel__prev,
.carousel__next {
  position: absolute;
  top: 0;
  margin-top: 37.5%;
  width: 4rem;
  height: 4rem;
  transform: translateY(-50%);
  border-radius: 50%;
  font-size: 0;
  outline: 0;
}

.carousel::before,
.carousel__prev {
  left: -1rem;
}

.carousel::after,
.carousel__next {
  right: -1rem;
}

.carousel::before,
.carousel::after {
  content: '';
  z-index: 1;
  background-color: #333;
  background-size: 1.5rem 1.5rem;
  background-repeat: no-repeat;
  background-position: center center;
  color: #fff;
  font-size: 2.5rem;
  line-height: 4rem;
  text-align: center;
  pointer-events: none;
}

.carousel::before {
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='0,50 80,100 80,0' fill='%23fff'/%3E%3C/svg%3E");
}

.carousel::after {
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='100,50 20,100 20,0' fill='%23fff'/%3E%3C/svg%3E");
}

</style>