@extends('master')
@section('content')
<div class="container">
    @component('components.page_hader')
    @slot('title') {{__('text.home_title')}} @endslot
    @slot('description') {{__('text.home_description')}} @endslot
    @endcomponent
</div>

<div class="container">
<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half img-fluid" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox" style="width: 100%; height: 500px; object-fit: cover; ">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" style="object-fit: cover" src="{{asset('/images/rsz_banner2.jpg')}}" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">This is the first title</h3>
        <p class="p-responsive">First text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" style="width: 100%;" style="object-fit: cover" src="{{asset('/images/rsz_1banner1.png')}}" alt="Second slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Thir is the second title</h3>
        <p class="p-responsive">Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      
      <div class="view">
        <img class="d-block w-100" style="width: 100%;" style="background-size: contain, cover; background-repeat: no-repeat;" src="https://mdbootstrap.com/img/Photos/Slides/img%20(108).jpg" alt="Third slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">This is the third title</h3>
        <p class="p-responsive">Third text</p>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
</div>


<style>
  .imgContainer{
    float:left !important;
    flex-direction: column !important !important;
}
.cardd {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    /* flex-direction: column; */
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
</style>


<div class="mt-4 mb-4">
  <div class="container mt-4">
    <blockquote class="blockquote text-center">
      <p class="mb-0"> {{__('text.partners')}} </p>
      <footer class="blockquote-footer">Provider <cite title="Source Title">And Companies</cite></footer>
    </blockquote>
    <div class="card mt-4">

      {{-- <div class="imgContainer">
      <img src="{{asset('/images/home/police.png')}}"height="200" width="200"/>
    </div>
    <div class="imgContainer">
      <img src="{{asset('/images/home/airplane.jpg')}}"height="200" width="200"/>
    </div>
    </div> --}}

    <div class="container">
      <div class="row align-items-stretch justify-content-start card-deck">
       <div class="card text-center border-0">
         <div class="card-body">
          <div class="card-text">
            <img style="max-height: 150px;" src="{{asset('/images/home/police.png')}}" alt="">
          </div>
         </div>
       </div>
       <div class="card text-center border-0">
         <div class="card-body">
          <div class="card-text">
            <img style="max-height: 150px;" src="{{asset('/images/home/Israel_Army-logo-615F4A31D8-seeklogo.com.png')}}" alt="">
          </div>
         </div>
       </div>
       <div class="card text-center border-0">
         <div class="card-body">
          <div class="card-text">
            <img style="max-height: 150px;" src="{{asset('/images/home/משרד-הביטחון.png')}}" alt="">
          </div>
         </div>
       </div>
       <div class="w-100">
    
       </div>
       <div class="card text-center border-0">
         <div class="card-body">
          <div class="card-text">
            <img style="max-height: 150px;" src="{{asset('/images/home/1200px-FireDepIsrael.svg.png')}}" alt="">
          </div>
         </div>
       </div>
       <div class="card text-center border-0">
         <div class="card-body">
          <div class="card-text">
            <img style="max-height: 150px;" src="{{asset('/images/home/1200px-Israel_prison_service_Icon_2018.svg.png')}}" alt="">
          </div>
         </div>
       </div>
       <div class="card text-center border-0">
        <div class="card-body">
         <div class="card-text">
           <img style="max-height: 150px;" src="{{asset('/images/home/airplane.jpg')}}" alt="">
         </div>
        </div>
      </div>
      </div>
    </div>
    
  </div>
</div>


<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">


<style>
  * { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  /* background: #222; */
}

.carousel-cell {
  width: 100%;
  height: 300px;
  margin-right: 10px;
  /* center images in cells with flexbox */
  display: flex;
  align-items: center;
  justify-content: center;
}

.carousel.is-fullscreen .carousel-cell {
  height: 100%;
}

.carousel-cell-image {
  display: block;
  max-height: 100%;
}

.carousel.is-fullscreen .carousel-cell-image {
  max-width: 100%;
}

.flickity-page-dots {
  bottom: -22px;
}
/* dots are lines */
.flickity-page-dots .dot {
  height: 4px;
  width: 40px;
  margin: 0;
  border-radius: 0;
}

</style>




@if (Session::get("product_view"))
<div class="container mt-3">
  <div class="carousel" data-flickity='{ "fullscreen": true, "lazyLoad": 1 }'>
    @foreach ($last_view as $item)
   
    {{-- onclick="window.open('{{asset('search/' .$item[0]->purl .'')}}', '_blank');" --}}
    <div class="carousel-cell">
    <img class="carousel-cell-image" 
        data-flickity-lazyload="{{asset('/images/'.$item[0]->pimage)}}" />
    </div>
    @endforeach
  </div>
</div>
<br>
    
{{-- @else

@php
use App\Product;
    // dd((Product::all()->random(4)));
    $last_view = Product::all()->random(4);
@endphp
    
<div class="container mt-3">
  <div class="carousel" data-flickity='{ "fullscreen": true, "lazyLoad": 1 }'>
    @foreach ($last_view as $item)
    <div class="carousel-cell">
      <img class="carousel-cell-image"
        data-flickity-lazyload="{{asset('/images/'.$item['pimage'])}}" />
    </div>
    @endforeach
  </div>
</div>
<br> --}}

@endif


<style>
  .body {
  padding: 20px;
  font-family: sans-serif;
  background: #f2f2f2;
}
.img {
  width: 100%; /* need to overwrite inline dimensions */
  height: auto;
}
h2 {
  margin-bottom: .5em;
}
.grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  grid-gap: 1em;
}


/* hover styles */
.location-listing {
  position: relative;
}

.location-image {
  line-height: 0;
  overflow: hidden;
}

.location-image img {
  filter: blur(0px);
  transition: filter 0.3s ease-in;
  transform: scale(1.1);
}

.location-title {
  font-size: 1.5em;
  font-weight: bold;
  text-decoration: none;
  z-index: 1;
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  opacity: 0;
  transition: opacity .5s;
  background: #2C2F33;
  color: white;
  
  /* position the text in t’ middle*/
  display: flex;
  align-items: center;
  justify-content: center;
}

/* .location-listing:hover .location-title {
  opacity: 1;
} */

.location-listing:hover .location-image img {
  filter: blur(0.9px);
}


/* for touch screen devices */
@media (hover: none) { 
  .location-title {
    opacity: 1;
  }
  .location-image img {
    filter: blur(1px);
  }
}
</style>


<div class="container body mt-3">
<div class="child-page-listing">

  <h2 class="{{__('btn.text_align')}}">{{__('text.brands')}}</h2>

  <div class="grid-container">

    <article id="3685" class="location-listing">

      <a class="location-title" href="#">
                    San Francisco                       </a>

      <div class="location-image">
        <a href="#">
                        <img class="img" width="300" height="169" src="https://cdn.shopify.com/s/files/1/0228/2169/9620/files/DT_brands-08_2_2048x.jpg?v=1589454609" alt="san francisco">      </a>

      </div>

    </article>

    <article id="3688" class="location-listing">

      <a class="location-title" href="#">
                    London                      </a>

      <div class="location-image">
        <a href="#">
                        <img class="img" width="300" height="169" src="https://cdn.shopify.com/s/files/1/0228/2169/9620/files/DT_brands-02_2_2048x.jpg?v=1589454668" alt="london">    </a>

      </div>

    </article>

    <article id="3691" class="location-listing">

      <a class="location-title" href="#">
                    New York                        </a>

      <div class="location-image">
        <a href="#">
                        <img class="img" width="300" height="169" src="https://cdn.shopify.com/s/files/1/0228/2169/9620/files/DT_brands-06_3_2048x.jpg?v=1589454827" alt="new york">    </a>

      </div>

    </article>

    <article id="3694" class="location-listing">

      <a class="location-title" href="#">
                    Cape Town                       </a>

      <div class="location-image">
        <a href="#">
                        <img class="img" width="300" height="169" src="https://cdn.shopify.com/s/files/1/0228/2169/9620/files/DT_brands-01_2_1_2048x.jpg?v=1589454910" alt="cape town">  </a>

      </div>

    </article>

    <article id="3697" class="location-listing">

      <a class="location-title" href="#">
                    Beijing                     </a>

      <div class="location-image">
        <a href="#">
                        <img class="img" width="300" height="169" src="https://cdn.shopify.com/s/files/1/0228/2169/9620/files/DT_brands-06_4_1_2048x.jpg?v=1590048913" alt="beijing">      </a>

      </div>

    </article>

    <article id="3700" class="location-listing">

      <a class="location-title" href="#">
                    Paris                       </a>

      <div class="location-image">
        <a href="#">
                        <img class="img" width="300" height="169" src="https://cdn.shopify.com/s/files/1/0228/2169/9620/files/DT_brands-04_2_2048x.jpg?v=1589454996" alt="paris">                  
                    </a>
      </div>

    </article>

  </div>
  <!-- end grid container -->

</div>
</div>






@endsection