 @extends('master')
@section('content')
<div class="container">
@component('components.page_hader')
    @slot('title') {{__('text.product_title', ['product_title' => $product->ptitle])}} @endslot
    @slot('description') {{__('text.categories_description')}} @endslot
    @endcomponent
    <div class="row"> 
        <div class="col-12 my-5">
          <div class="card">
            <div class="header">
            <h3>{{$product->ptitle}}</h3>
            </div>
          <img src="{{asset('images/'.$product->pimage)}}" class="card-img-top">
            <div class="card-body">
            <p>{{$product->particle}}</p>
            <p><b>{{__('text.price_on_site')}} <b>$</b>{{$product->price}}</b></p>
            <p class="{{__('btn.float')}}">
              
              @if (!Cart::get($product->id))
            <button data-pid="{{$product->id}}" class="btn btn-success add-to-cart-btn">
              <i class="fas fa-cart-plus"></i> {{__('text.add_to_cart')}}
              </button>
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
</div>
@endsection