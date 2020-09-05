@php
    use App\Product;
@endphp

@extends('master')
@section('content')
<div class="container">
    {{-- @component('components.page_hader')
    @slot('title') {{__('text.home_title')}} @endslot
    @slot('description') {{__('text.home_description')}} @endslot
    @endcomponent --}}
</div>

<!-- index css -->
<link rel="stylesheet" href="{{asset('css/indexPage.css')}}">



@component('components.indexBanner')
@slot('title_one') Idfgear @endslot
@slot('title_two') Professional equipment @endslot
@slot('title_tree') AirSoft And Tools @endslot
@slot('title_four') Israeli tactical outdoor gear @endslot
@endcomponent



<hr>


<div class="container body mt-3">
<div class="child-page-listing">

  <h2 class="{{__('btn.text_align')}}">{{__('text.brands')}}</h2>

  <div class="grid-container">

    <article id="3685" class="location-listing">

      <a class="location-title" href="{{asset('search/masada')}}">
                    <!--San Francisco-->                       </a>

      <div class="location-image">
        <a href="#">
        <img class="img" width="300" height="169" src="{{asset('/images/home/masada .png')}}" alt="masada">      </a>

      </div>

    </article>

    <article id="3688" class="location-listing">

      <a class="location-title" href="{{asset('search/Lior-pig')}}">
                    <!--San Francisco-->                      </a>

      <div class="location-image">
        <a href="#">
                        <img class="img" width="300" height="169" src="{{asset('/images/home/Lior-pig.png')}}" alt="london">    </a>

      </div>

    </article>

    <article id="3691" class="location-listing">

      <a class="location-title" href="{{asset('search/511')}}">
                    <!--San Francisco-->                        </a>

      <div class="location-image">
        <a href="#">
                        <img class="img" width="300" height="169" src="{{asset('/images/home/Logo-511_Tactical.svg.png')}}" alt="new york">    </a>

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

<style>
  /* position dots up a bit */
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


<hr>

@if (Session::get("product_view"))
<div class="container mt-3">
<h1 class="mb-3 text-center">{{__('text.rhf-container')}}</h1>
  <div class="carousel" data-flickity='{ "fullscreen": true, "lazyLoad": 1, "autoPlay": 3000, "pauseAutoPlayOnHover": false, "selectedAttraction": 0.01, "friction": 0.40, "wrapAround": true}'>
    @foreach ($last_view as $item)
   
    {{-- onclick="window.open('{{asset('search/' .$item[0]->purl .'')}}', '_blank');" --}}
    <div class="carousel-cell">
    <h3 onclick="window.location.href =('{{asset('search/' .$item[0]->purl .'')}}');">{{$item[0]->ptitle}}:&nbsp;&nbsp;&nbsp;  </h3>
    <img class="carousel-cell-image" 
        data-flickity-lazyload="{{asset('/images/'.$item[0]->pimage)}}" />
    </div>
    @endforeach
  </div>
</div>
<br><br>
    
@else

<div class="container mt-3">

  @php
    $last_view = Product::fiveItems();
  @endphp

  <h1 class="mb-3 text-center">{{__('text.products_you_may_like')}}</h1>
    <div class="carousel" data-flickity='{ "fullscreen": true, "lazyLoad": 1, "autoPlay": 3000, "pauseAutoPlayOnHover": false, "selectedAttraction": 0.01, "friction": 0.40, "wrapAround": true}'>
      @foreach ($last_view as $item)
     
      {{-- onclick="window.open('{{asset('search/' .$item[0]->purl .'')}}', '_blank');" --}}
      <div class="carousel-cell">
      <h3>{{$item->ptitle}}:&nbsp;&nbsp;&nbsp;  </h3>
      <img class="carousel-cell-image" 
          data-flickity-lazyload="{{asset('/images/'.$item->pimage)}}" />
      </div>
      @endforeach
    </div>
  </div>
  <br><br>

@endif



<link rel="stylesheet" href="{{asset('css/card.css')}}">
<div class="container">
  <hr>
  <br><br>
  <h1 class="{{__('btn.text_align')}}">{{__('text.new_products')}}</h1>
  @if(Product::newItems() )
  
          @foreach(Product::newItems() as $item)
  <div class="card">
    <div class="card-img" style="background-image:url({{asset('images/' . $item->pimage)}});">
      <div class="overlay">
        <div class="overlay-content">
          <a href="{{url('shop/'.$item->url . '/'. $item->purl)}}">{{__('text.view_product')}}</a>
        </div>
      </div>
    </div>
    
    <div class="card-content">
      <a href="{{url('shop/'.$item->url . '/'. $item->purl)}}">
        <h2>{{$item->ptitle ?? 'Error'}}</h2>
        <p>{!!$item->in_short ?? null!!}</p>
      <h7 class="float-right">{{date('d/m/y H:i:s', strtotime($item->updated_at))}}</h7>
      </a>
    </div>
  </div>
  @endforeach
  @endif
  <br><br>
  </div>


@endsection