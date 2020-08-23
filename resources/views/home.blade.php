@extends('master')
@section('content')
<div class="container">
    @component('components.page_hader')
    @slot('title') {{__('text.home_title')}} @endslot
    @slot('description') {{__('text.home_description')}} @endslot
    @endcomponent
</div>


<!-- index css -->
<link rel="stylesheet" href="{{asset('css/indexPage.css')}}">

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






@if (Session::get("product_view"))
<div class="container mt-3">
<h1 class="mb-3 text-center">{{__('text.rhf-container')}}</h1>
  <div class="carousel" data-flickity='{ "fullscreen": true, "lazyLoad": 1, "autoPlay": 1500, "pauseAutoPlayOnHover": false}'>
    @foreach ($last_view as $item)
   
    {{-- onclick="window.open('{{asset('search/' .$item[0]->purl .'')}}', '_blank');" --}}
    <div class="carousel-cell">
    <h3>{{$item[0]->ptitle}}:&nbsp;&nbsp;&nbsp;  </h3>
    <img class="carousel-cell-image" 
        data-flickity-lazyload="{{asset('/images/'.$item[0]->pimage)}}" />
    </div>
    @endforeach
  </div>
</div>
<br><br>
    
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





<div class="container body mt-3">
<div class="child-page-listing">

  <h2 class="{{__('btn.text_align')}}">{{__('text.brands')}}</h2>

  <div class="grid-container">

    <article id="3685" class="location-listing">

      <a class="location-title" href="{{asset('search/caa')}}">
                    <!--San Francisco-->                       </a>

      <div class="location-image">
        <a href="#">
                        <img class="img" width="300" height="169" src="https://cdn.shopify.com/s/files/1/0228/2169/9620/files/DT_brands-08_2_2048x.jpg?v=1589454609" alt="san francisco">      </a>

      </div>

    </article>

    <article id="3688" class="location-listing">

      <a class="location-title" href="#">
                    <!--San Francisco-->                      </a>

      <div class="location-image">
        <a href="#">
                        <img class="img" width="300" height="169" src="https://cdn.shopify.com/s/files/1/0228/2169/9620/files/DT_brands-02_2_2048x.jpg?v=1589454668" alt="london">    </a>

      </div>

    </article>

    <article id="3691" class="location-listing">

      <a class="location-title" href="#">
                    <!--San Francisco-->                        </a>

      <div class="location-image">
        <a href="#">
                        <img class="img" width="300" height="169" src="https://cdn.shopify.com/s/files/1/0228/2169/9620/files/DT_brands-06_3_2048x.jpg?v=1589454827" alt="new york">    </a>

      </div>

    </article>

    <article id="3694" class="location-listing">

      <a class="location-title" href="#">
                    <!--San Francisco-->                       </a>

      <div class="location-image">
        <a href="#">
                        <img class="img" width="300" height="169" src="https://cdn.shopify.com/s/files/1/0228/2169/9620/files/DT_brands-01_2_1_2048x.jpg?v=1589454910" alt="cape town">  </a>

      </div>

    </article>

    <article id="3697" class="location-listing">

      <a class="location-title" href="#">
                    <!--San Francisco-->                     </a>

      <div class="location-image">
        <a href="#">
                        <img class="img" width="300" height="169" src="https://cdn.shopify.com/s/files/1/0228/2169/9620/files/DT_brands-06_4_1_2048x.jpg?v=1590048913" alt="beijing">      </a>

      </div>

    </article>

    <article id="3700" class="location-listing">

      <a class="location-title" href="#">
                    <!--San Francisco-->                       </a>

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