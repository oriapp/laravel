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


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">




<div class="row">
@foreach ($products as $product)
  
<div class="col-md-4">
	<figure class="card card-product">
		<div class="img-wrap"><img src="{{asset('images/'.$product->pimage)}}"></div>
		<figcaption class="info-wrap">
				<h4 class="title">{{$product->ptitle}}</h4>
				<p class="desc">{{$product->in_short}}</p>
				{{-- <div class="rating-wrap">
					<div class="label-rating">132 reviews</div>
					<div class="label-rating">154 orders </div>
				</div> <!-- rating-wrap.// --> --}}
		</figcaption>
		<div class="bottom-wrap">
    <a href="{{url('shop/'.$product->url.'/'.$product->purl)}}" class="btn btn-sm btn-primary float-right">View Product</a>	
			<div class="price-wrap h5">
        @php
            if($product->old_price == "0.00"){
              $product->old_price = null;
            } else {
              $product->old_price = "$$product->old_price";
            }
        @endphp
      <span class="price-new">${{$product->price}}</span> <del class="price-old">{{$product->old_price}}</del>
			</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
@endforeach
</div> <!-- row.// -->



</div> 
<!--container.//-->


<div class="d-flex justify-content-center">
<div class="mt-4">
  {{$products->appends(['sort' => 'title'])->render()}}
</div>
</div>


@endsection