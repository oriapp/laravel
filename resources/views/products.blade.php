 @extends('master')
@section('content')
<div class="container">
@component('components.page_hader')
    @slot('title') {{__('text.product_title', ['product_title' => $products[0]->title])}} @endslot
    @slot('description') {{null}} @endslot
    @endcomponent

    <div class="sidenav mt-5" class="selection">
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
        <div class="col-lg-5 mt-3">
          <div class="card">
            <div class="header">
            <h3>{{$product->ptitle}} | {{$product->amount}}</h3>
            </div>
          <img height="250" src="{{asset('images/'.$product->pimage)}}" class="card-img-top">
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

            <span class="badge badge-pill badge-secondary">{{$product->amount}} in stock</span>

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
</div>
@endsection