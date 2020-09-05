@extends('master')
@section('content')
<div class="container">
@component('components.page_hader')
    {{-- @slot('title') {{__('text.product_title', ['product_title' => $product->ptitle])}} @endslot --}}
    @slot('title') {{null}} @endslot
    @slot('description') {{null}}  <!-- {{$product->brand}} -->@endslot
    @endcomponent


    {{-- <div class="row"> 
        <div class="col-7 my-5">
          <div class="card">
            <div class="header">
            <h3>{{$product->ptitle}}</h3>
            </div>
          <img src="{{asset('images/'.$product->pimage)}}" class="card-img-top">
            <div class="card-body">
            <p>{!! $product->particle !!}</p>
            <p><b>{{__('text.price_on_site')}} <b>$</b>{{$product->price}}</b></p>
            <p class="{{__('btn.float')}}">
              
              @if (!Cart::get($product->id))
              @if($product->amount)
            <button data-pid="{{$product->id}}" class="btn btn-success add-to-cart-btn">
              <i class="fas fa-cart-plus"></i> {{__('text.add_to_cart')}}
              </button>
              @else
              <button class="btn btn-danger">
                out of stock!
                </button>
              @endif
              @else
              <button class="btn btn-success" disabled="disabled">
                In Cart!
              </button>
              @endif
              
              <a href="{{url('shop/cart')}}" class="btn btn-primary ml-2">
                {{__('text.go_to_cart')}}
              </a>
            </p>
            </div>
          </div>
        </div>
    </div>
    </div>
</div> --}}

{{-- {{dd($product)}} --}}

<link rel="stylesheet" href="{{asset('css/selectoption.css')}}">



<style>
  img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */
</style>



<div class="container">
  <div class="card">
    <div class="container-fliud">
      <div class="wrapper row">
        <div class="preview col-md-6">
          
          <div class="preview-pic tab-content">
            <div class="tab-pane active" id="pic-1"><img src="{{asset('images/'.$product->pimage)}}" /></div>
            {{-- <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
            <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
            <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
            <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div> --}}
          </div>
          <ul class="preview-thumbnail nav nav-tabs">
            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{asset('images/'.$product->pimage)}}" /></a></li>
            {{-- <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li> --}}
            
          </ul>
          
        </div>
        <div class="details col-md-6">
          <h3 class="product-title">{{$product->ptitle}}</h3>
          {{-- <div class="rating">
            <div class="stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
            <span class="review-no">41 reviews</span>
          </div> --}}
          <p class="product-description">{!!$product->particle!!}</p>
          <h4 class="price {{__('btn.text_align')}}">{{__('text.price_on_site')}} <span>${{$product->price}}</span></h4>
          {{-- <h5 class="colors">colors:
            <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
            <span class="color green"></span>
            <span class="color blue"></span>
          </h5> --}}

          @if ($product->colors !== null)
          <div class="row container mt-3">
          <div class="select-colors">
            <h5 class="sizes">Colors:
              <select class="select2 form-control" name="colors" id="colors">
                <label for="colors">Colors</label>
                @foreach (unserialize($product->colors) as $colors)
                  <option>{{$colors}}</option>
                @endforeach
              </select>
            </h5>
            </div>
          </div>
          @endif


          @if ($product->size !== null)
          <div class="row container mt-3">
          <div class="select-size">
            <h5 class="sizes">sizes:
              <select class="select2 form-control" name="size" id="size">
                <label for="size">Size</label>
                @foreach (unserialize($product->size) as $size)
                  <option>{{$size}}</option>
                @endforeach
              </select>
            </h5>
            </div>
          </div>
          @endif

          <div class="action">
            <button data-pid="{{$product->id}}" class="add-to-cart btn btn-default" type="button">
              <i class="fas fa-cart-plus"></i> {{__('text.add_to_cart')}}
              </button>
            {{-- <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="sa">
<div class=" mb-5">
  <div class="row">
    <div class="col-md-4">
      <div class="card card-1">
        <h3>Ionic Native</h3>
        <p>A curated set of   ES5/ES6/TypeScript wrappers for plugins to easily add any native functionality to your Ionic apps.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-2">
        <h3>UI Components</h3>
        <p>Tabs, buttons, inputs, lists, cards, and more! A comprehensive library
          of mobile UI components, ready to go.</p>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="card card-3">
        <h3>Theming</h3>
        <p>Learn how to easily customize and modify your app’s design to fit your
          brand across all mobile platform styles.</p>
      </div>
    </div>
    
  </div>
</div>
</div>


@endsection