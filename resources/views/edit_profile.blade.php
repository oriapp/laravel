@extends('master')
@section('content')

<style>
    .about {
    min-height: 750px;
}
</style>

<section class="breadcumb-area jarallax bg-img af about">
    <div class="breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="content">
                        <h2>Personal Settings</h2>
                        <ul>
                            <li><a href="{{url('')}}">Home</a></li>
                            <li><a href="javascript:void(0)">User</a></li>
                            <li><a href="javascript:void(0)">Me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="container mt-5 about-area section bg-img about jarallax">
        @if (!Session::has('wishlist') || Session::get('wishlist') == 0)

        <div class="about">
        <br>
        <div class="text-center col-md-12 col-sm-12 ">
            <div class="section-heading">
                <h2> Cart empty </h2>
            </div>
        </div>

        <div class="text-center"><b>Cart Is Empty</b></div>

    </div>

    @else
<!--Products area start here-->
<section class="shop-page section">
  <div class="container">
      <div class="row">
          <div class="col-sm-3">
              <div class="sibebar">
                  <div class="wighet search">
                      <form>
                          <input disabled type="search" placeholder="Search here (disabled)">
                          <button class="search" type="submit"><i class="fa fa-search"></i></button>
                      </form>
                  </div>
                  
                  
              </div>
          </div>
          <div class="col-sm-9 pd-0">
              <div class="col-sm-12">

                <div class="section-heading">
                  <h2> {{Session::get('user_name')}}'s wishlist ⭐ </h2>
              </div>
              
              </div>

              
              <div class="card-group h-400 w-260">
                @foreach (Session::get('wishlist') as $ses)

                @foreach (Product::getProductByID($ses) as $product)

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
                @endforeach

              </div>
              
          </div>
      </div>
  </div>
</section>
<!--Products area end here-->
    @endif
       
    </div>

</div>
@endsection