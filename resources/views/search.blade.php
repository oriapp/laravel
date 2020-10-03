
@extends('master')
@section('content')
<div class="container">
@component('components.page_hader')
    @slot('title') <div>{{$res->total()}} search results found</div> @endslot
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


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">


<div class="row">
@foreach ($res as $product)

@php
    if($product->visibility == "0"){
      continue;
    }
@endphp
  
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

      @foreach ($categoriess as $item)
          @php
          // $direct = null;
          //     if($item->id == $product->categorie_id){
          //     $direct = $item->url;
          //   }

          // dd($item);
          @endphp	
      @endforeach
      <a href="{{url('shop/' .$item->url . '/' .$product->purl)}}" class="btn btn-sm btn-primary float-right">View Product</a>
      
			<div class="price-wrap h5">
        @if ($product->old_price != null && $product->old_price != "0.00")
        <span class="price-new">${{$product->price}}</span> <del class="price-old">{{$product->old_price}}</del>
        @else
        <span class="price-new">${{$product->price}}</span>
        @endif
      
			</div> <!-- price-wrap.// -->
		</div> <!-- bottom-wrap.// -->
	</figure>
</div> <!-- col // -->
@endforeach
</div> <!-- row.// -->




</div> 
<!--container.//-->

{{ $res->links() }}


@endsection