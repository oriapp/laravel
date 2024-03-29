@php
    $num = 0;
@endphp

@extends('master')
@section('content')


 <!--Breadcumb area start here-->
 <section class="breadcumb-area jarallax bg-img af">
  <div class="breadcumb">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="content">
                      <h2>Our products</h2>
                      <ul>
                          <li><a href="{{url('')}}">Home</a></li>
                          <li><a href="javascript:void(0)">shop</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--Breadcumb area end here-->

@if ($res && count($res) > 0)
    
<!--Products area start here-->
<section class="shop-page section">
  <div class="container">
      <div class="row">
          <div class="col-sm-3">
              <div class="sibebar">
                  <div class="wighet search">
                      <form>
                          <input type="search" placeholder="Search here">
                          <button type="submit"><i class="fa fa-search"></i></button>
                      </form>
                  </div>
                  <div class="wighet categories">
                      <h3>categ<span>ories</span></h3>
                      <ul>
                          @foreach (Categorie::getAll() as $cat)
                              {{-- {{dd($cat)}} --}}
                      <li><a href="{{$cat->url}}"><i class="fa fa-angle-double-right"></i>{{$cat->title}} </a></li>

                          @endforeach
                      </ul>
                  </div>

              </div>
          </div>
          <div class="col-sm-9 pd-0">
              <div class="col-sm-12">
                  <div class="filter-area">

                      <div class="showpro">
                          <p><span>{{$res->total()}} Results found</span></p>
                      </div>
                  </div>
              </div>

              
              <div class="card-group h-400 w-260">
                @foreach ($res as $product)
                @php
                    $num += 1;
                @endphp
                <div class="col-sm-4 products">
                  <figure><img src="{{asset('images/'.$product->pimage)}}" alt="" /></figure>
                  <div class="contents">
                  <h3 style="font-size: 20px !important">{{mb_strimwidth($product->ptitle, 0, 15, '...')}}</h3>
                      {{-- {{mb_strimwidth($product->in_short, 0, 10, '...')}} <br> --}}
                      <span>$1,499.00</span>
                      <a href="{{url('shop/'.$product->url.'/'.$product->purl)}}" class="btn4">Add To Cart</a>
                  </div>
              </div>
              @if ($num == 6)
                    <h1 style="visibility: hidden;">ad</h1>
                    @php
                        $num = 0;
                    @endphp
                @endif
                @endforeach

              </div>
              <div class="col-sm-12">
                  <div class="">

                      {{$res->appends(['sort' => 'title'])->render()}}
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--Products area end here-->

@else

<div style="min-height: 750px;" class="about">
  <br>
  <div class="text-center col-md-12 col-sm-12 ">
      <div class="section-heading">
          <h2> 404 </h2>
      </div>
  </div>

  <div class="text-center"><b>0 Results found!</b></div><br>
  <div class="text-center"><a class="btn btn-primary" href="{{url('')}}" role="button">Go Home</a></div>

</div>

@endif

<!--Subscribe area start here-->
<section class="subscribe-area">
  <div class="container">
      <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="subscribe">
                  <span class="ico"><i class="far fa-envelope"></i></span>
                  <div class="conts">
                      <h2>Get Our Latest News</h2>
                      <p>Subscribe our Newsletter Now !</p>
                  </div>
                  <form>
                      <input type="email" placeholder="Email Address">
                      <button type="submit" class="btn1">Subscribe</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
<!--Subscribe area End here-->



@endsection