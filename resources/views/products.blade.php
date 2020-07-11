 @extends('master')
@section('content')
<div class="container">
@component('components.page_hader')
    @slot('title') {{__('text.product_title', ['product_title' => $products[0]->title])}} @endslot
    @slot('description') {{__('text.categories_description')}} @endslot
    @endcomponent
    <div class="row"> 
        @foreach($products as $product)
        <div class="col-lg-6 mt-3">
          <div class="card">
            <div class="header">
            <h3>{{$product->ptitle}}</h3>
            </div>
          <img height="250" src="{{asset('images/'.$product->pimage)}}" class="card-img-top">
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

              <a href="{{url('shop/'.$product->url.'/'.$product->purl)}}" class="btn btn-primary ml-2">
                <i class="fas fa-eye"></i> {{__('text.more_detailes')}}
              </a>
            </p>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    </div>
</div>
@endsection