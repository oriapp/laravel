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

@if ($products && count($products) > 0)
    
<!--Products area start here-->
<section class="shop-page section">
  <div class="container">
      <div class="row">
          <div class="col-sm-3">
              <div class="sibebar">
                  <div class="wighet search">
                      <form>
                          <input disabled type="search" placeholder="Search here (disabled)">
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
                  <div class="wighet filter">
                      <h3>Filter by  <span>Price</span></h3>
                      <div class="price-range">
                          <div class="range">
                              <div id="range-price" class="range-box"></div>
                              <span>Form :</span>
                              <input type="text" id="price" class="price-box" readonly/>

                          </div>
                          <button disabled="disabled" type="submit" class="btn1">FILTER</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-9 pd-0">
              <div class="col-sm-12">
                  <div class="filter-area">
                      <select disabled>
                          <option>short by</option>
                          <option>Lower To Height</option>
                          <option>Height To Lower</option>
                          <option>Best Seller</option>
                      </select>
                      <div class="list-grid">
                          <ul class="list-inline">
                              <li><a href="#" id="gridview"><i class="fa fa-th"></i></a></li>
                              {{-- <li><a href="#" id="listview"><i class="fa fa-list"></i></a></li> --}}
                          </ul>
                      </div>
                      <div class="showpro">
                          <p><span>{{$products->total()}} Results found</span></p>
                      </div>
                  </div>
              </div>

              
              <div class="card-group h-400 w-260">
                @foreach ($products as $product)

                <div class="col-sm-4 products">
                  <figure><img src="{{asset('images/'.$product->pimage)}}" alt="" /></figure>
                  <div class="contents">
                  <h3 style="font-size: 20px !important">{{mb_strimwidth($product->ptitle, 0, 15, '...')}}</h3>
                      {{-- {{mb_strimwidth($product->in_short, 0, 10, '...')}} <br> --}}
                      <span>${{$product->price}}</span>
                      <a href="{{url('shop/'.$product->url.'/'.$product->purl)}}" class="btn1">Add To Cart</a>
                      @if (Session::has('user_id'))
                      <button data-pid="{{$product->id}}" data-uid="{{Session::get('user_id')}}" class="wishlist float-left"><i class="float-left fas fa-star"></i></button>
                      @endif
                  </div>
              </div>

                @endforeach

              </div>
              <div class="col-sm-12">
                  <div class="">

                      {{$products->appends(['sort' => 'title'])->render()}}
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--Products area end here-->

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