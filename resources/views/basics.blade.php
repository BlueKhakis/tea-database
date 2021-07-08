<a href='/'>Home</a> -> Basics

<h1>basics</h1>
<h2>Get started</h2>
Lorem ipsum dolor sit amet consectetur adipisicing elit. At, perspiciatis. Unde, et itaque? Accusantium iure saepe officiis autem, deleniti voluptatibus velit maxime magni delectus suscipit harum eum aliquam culpa laboriosam!<br>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas commodi est corrupti qui esse debitis magnam itaque, corporis accusamus voluptatum rerum doloribus repudiandae culpa? Quo fugiat expedita inventore similique! Ducimus explicabo blanditiis, quisquam quis minima iste veritatis sapiente, commodi, quidem modi asperiores exercitationem illo. Autem ab consequatur provident id?<br> Necessitatibus unde repudiandae, ipsa nemo ea fugit ipsam natus sequi reprehenderit tenetur exercitationem aperiam tempore rem culpa molestiae dolores explicabo neque cum nihil pariatur amet iste a! Obcaecati beatae, excepturi hic, esse libero fugit eius nobis quae non quaerat facere laboriosam placeat laborum? Officiis sapiente voluptates tempora quas impedit labore nostrum?<br>

<h2>still not sure? try from our top-rated teas</h2>

Top 6 teas



<ul>
@foreach ($teas as $tea)
<li>{{$tea->name}} {{$tea->average_rating}}</li>
@endforeach
</ul>