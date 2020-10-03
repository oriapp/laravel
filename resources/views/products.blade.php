 @extends('master')
@section('content')
<div class="container">
@component('components.page_hader')
    @slot('title') {{__('text.product_title', ['product_title' => $products[0]->title])}} @endslot
    @slot('description') {{null}} @endslot
    @endcomponent

    <style>
      

  .card-product:after {
    content: "";
    display: table;
    clear: both;
    visibility: hidden; }
  .card-product .price-new, .card-product .price {
    margin-right: 5px; }
  .card-product .price-old {
    color: #999; }
  .card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center; }
    .card-product .img-wrap img {
      max-height: 100%;
      max-width: 100%;
      object-fit: cover; }
      
      .card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee; }
  .card-product .action-wrap {
    padding-top: 4px;
    margin-top: 4px; }
  .card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee; }
  .card-product .title {
    margin-top: 0; }
    </style>

    {{-- <div class="sidenav mt-5" class="selection">
      <div class="card">
        <article class="card-group-item">
          <header class="card-header">
            <h6 class="title">Categorys </h6>
          </header>
          <div class="filter-content">
            <div class="card-body">
            <form>
              @foreach ($categories as $item)
              <label class="mr-5">
                <span class="form-check-label">
                  <a class="text-dark" style="font-size: 15px;" href="{{url('shop/'.$item->url)}}">{{$item->title}}</a>
                </span>
              </label>
              @endforeach
            </form>
      
            </div>
          </div>
        </article>
        
      </div>
    </div>



    <div class="row">
        @foreach($products as $product)
        <div class="col-lg-6 mt-3">
          <div class="card">
            <div class="header">
            <h3>{{$product->ptitle}}</h3>
            </div>
          <img height="250" src="{{asset('images/'.$product->pimage)}}" class="card-img-top">
            <div class="card-body">
            <p>{!! $product->particle !!}</p>
            <p><b>{{__('text.price_on_site')}} <b>$</b>{{$product->price}}</b></p>
            <div class="container">
              <span class="mb-2 badge badge-pill badge-secondary">{{$product->amount}} in stock</span>
            </div>
            <p class="{{__('btn.float')}}">
              
              @if (!Cart::get($product->id))
            @if($product->amount)
            <button data-pid="{{$product->id}}" class="btn btn-success add-to-cart-btn">
              <i class="fas fa-cart-plus"></i> {{__('text.add_to_cart')}}
              </button>
              @else
              <button class="btn btn-danger disabled">
                out of stock!
                </button>
              @endif
              @else
              <button class="btn btn-success" disabled="disabled">
                In Cart!
              </button>
              @endif

              <a href="{{url('shop/'.$product->url.'/'.$product->purl)}}" class="btn btn-primary ml-2">
                <i class="fas fa-eye"></i> {{__('text.more_detailes')}}
              </a>
            </p>

            </div>
          </div>
        </div>
        @endforeach
    </div>
    <div class="row">
      <div class="col-12 my-4 ">
        {{$products->links()}}
      </div>
    </div>
    </div>
</div> --}}


<style>
.single-product{
  padding:  10px;
  box-shadow: 0 1px 10px 0px rgba(0, 0, 0, 0.05);
  transition: all .2s ease-out;
  margin-bottom: 20px;
  background-color: #fff;
  border: 2px solid  rgba(31, 45, 61, 0.349);
  height: 100%;
  position: relative;

}
.single-product:hover{
   transform: translateY(-10px);
    box-shadow: 0 1rem 3rem rgba(31,45,61,.125)!important;
}
.img-container {
	position: relative;
}

.img-container .p-img{
    width: 100%;
    height: 200px;
    object-fit: contain;
}
.img-container:after {
  content: '';
  position: absolute;
  width: 100%;
  height:100%;
  top:0;
  left:0;
  background:rgba(132, 88, 179, 0.5);
  opacity: 0;
  transition: all 1s;
  -webkit-transition: all 1s;
  -moz-transition: all 1s;
  -ms-transition: all 1s;
  -o-transition: all 1s;
}
 .single-product:hover .img-container:after {
  opacity: 1;
}
.sale {
	position: absolute;
	right: 12px;
	top: 12px;
	background-color: #8458b3;
	color: #fff;
	padding: 1px 10px;
	font-size: 14px;
  font-weight: 600;
  z-index: 1;
}

.view-btn {
	position: absolute;
	top: 50%;
	left: 50%;
  transform: translate(-50%, -50%);
  display: none;
  z-index: 1;


}
.single-product:hover .view-btn{
  display: inline-block;

}
.view-btn .btn-view {
	background-color: #8458b3;
	color: #fff;
	border-radius: 0px;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	-ms-border-radius: 0px;
	-o-border-radius: 0px;
}
.view-btn .btn-view:hover {
	background-color: #fff;
	color: var(--blackColor);
	-webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
	box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.product-details .category a {
	text-decoration: none;
	display: inline-block;
	margin-top: 6px;
	color: #777;
	font-size: 15px;
}
.product-title{
  padding-bottom: 30px;
}
.product-details .product-title h3 a {
  text-decoration: none;
  display: inline-block;
  margin-top: 6px;
  color: #111;
  font-size: 20px;
  transition: 0.3 ease-in-out ;
  -webkit-transition: 0.3 ease-in-out ;
  -moz-transition: 0.3 ease-in-out ;
  -ms-transition: 0.3 ease-in-out ;
  -o-transition: 0.3 ease-in-out ;

}
.product-details .product-title h3 a:hover{
color: #8458b3;
}
.product-ratings{
  margin-top: 10px;
}
.product-details  .product-ratings i{
  color: #ffa500;

}
.price span {
	color: #8458b3;
	font-size: 14.5px;
	font-weight: 600;
}
.price span.old-price {
	font-size: 13px;
	color: #777;
	text-decoration: line-through;
}

.positioned-bottom{
  position: absolute;
  bottom: 0;
  left: 10px;

}


</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<section id="product-cards">
  <div class="container pt-5">
    <div class="row">

      @foreach ($products as $product)

    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
      <div class="single-product">
        <div class="img-container">
          <img src="{{asset('images/'.$product->pimage)}}" class="img-fluid p-img" alt="">
          <div class="sale">sale</div>
          <div class="view-btn">
            <a href="{{url('shop/'.$product->url.'/'.$product->purl)}}" class="btn btn-view  btn-sm btn-block"> <i class="fas fa-eye    "></i> View </a>
          </div><!-- /.view-btn -->
        </div><!-- /.img-container -->
        <div class="product-details">
          <div class="category">
            <a href="{{url('shop/'.$product->url)}}"> {{$products[0]->title}} </a>
          </div><!-- /.category -->
          <div class="product-title">
            <h3><a href="{{url('shop/'.$product->url.'/'.$product->purl)}}"> {{$product->ptitle}} </a></h3>
          </div><!-- /.product-title -->
          <div class="positioned-bottom">
            {{-- <div class="product-ratings">
              <i class="fas fa-star    "></i>
              <i class="fas fa-star    "></i>
              <i class="fas fa-star    "></i>
              <i class="fas fa-star    "></i>
            </div><!-- /.product-ratings --> --}}
            <div class="price mb-2 mt-1">
              @if ($product->old_price && $product->old_price != "0.00")
              <span class="old-price mr-1">${{$product->old_price}}</span>
              @endif
              <span class="new-price">${{$product->price}}</span>
            </div> <!-- .price -->
          </div><!-- /.positioned-bottom -->
        </div><!-- /.product-details -->
      </div><!-- /.single-product -->
    </div>
    <!--end col-->

    @endforeach

    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /#product-cards -->


<div class="d-flex justify-content-center">
<div class="mt-4">
  {{$products->appends(['sort' => 'title'])->render()}}
</div>
</div>


@endsection