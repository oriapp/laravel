@php

         function amount($id){
           $pro = DB::table('products as p')
         ->where('p.id', '=', $id)
         ->select('p.amount')
         ->get();
         
         return (int) filter_var($pro, FILTER_SANITIZE_NUMBER_INT);
         }
@endphp

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
                        <h2>Checkout</h2>
                        <ul>
                            <li><a href="{{url('')}}">Home</a></li>
                            <li><a href="{{url('shop')}}">shop</a></li>
                            <li><a href="javascript:void(0)">cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="container mt-5 about-area section bg-img about jarallax">
        @if(!Cart::isEmpty())

        <br><br><br>

        <div class="col-md-12 col-sm-12">
            <div class="section-heading">
                <h2> Shopping Cart </h2>
            </div>
        </div>


        <div class="col-12">
            <table class="table table-bordered table-responsive-sm">
                <thead>
                    <tr>
                        <th>Product:</th>
                        <th class="text-center">Quantity:</th>
                        <th>Price:</th>
                        <th>Sub Total:</th>
                        <th>In our stock:</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $item)

                    @php
                        $color = null;
                        $size = null;
                        
                        (!empty($item['attributes']['color'])) ? $color = $item['attributes']['color'] : $color = null;

                        (!empty($item['attributes']['size'])) ? $size = $item['attributes']['size'] : $size = null;

                    @endphp

                        <tr>
                        <td>{{$item['name']}} <mark>{{$color}} {{$size}}</mark></td>
                            <td class="text-center">
                            <button data-pid="{{$item['id']}}" data-op="minus" type="button" href="#" class="update-cart-btn btn btn-outline-primary btn-sm"><i class="fas fa-minus-circle"></i></button>
                            <input disabled="disabled" size="1" id="quantity" class="text-center" type="text" value="{{$item['quantity']}}">
                                <button data-pid="{{$item['id']}}" data-qu="{{amount($item['id'])}}" data-op="plus" type="button" href="#" class="update-cart-btn btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i></button>
                            </td>
                            <td>{{$item['price']}}</td>
                            <td>${{$item['quantity'] * $item['price']}}</td>
                            <td id="{{$item['id']}}-instock">{{amount($item['id'])}}</td>
                            
                        <td><a class="text-danger remove-from-cart-btn" href="{{url('shop/cart?removeItem='.$item['id'])}}"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p>
                <b>Total In Cart: </b> ${{Cart::getTotal()}}
                <span class="float-right">
                    <a href="#" class="btn btn-light clear-cart-btn">
                        Clear Cart
                        
                    </a>
                </span>
            </p>
            <p>
            <a href="{{url('shop/check-out')}}" class="btn btn-primary btn-lg">Buy Now!</a>
            </p>
            
        </div>
        @else

        <div class="about">
        <br>
        <div class="text-center col-md-12 col-sm-12 ">
            <div class="section-heading">
                <h2> Cart empty </h2>
            </div>
        </div>

        <div class="text-center"><b>Cart Is Empty</b></div>

    </div>
        @endif
    </div>

</div>
@endsection