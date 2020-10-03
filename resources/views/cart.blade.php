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
<div class="container">
    @component('components.page_hader')
    @slot('title') Cart Page @endslot
    @slot('description') {{__('text.about_description')}} @endslot
    @endcomponent
    <div class="row">
        @if(!Cart::isEmpty())
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
                    {{-- {{dd($cart[0]['attributes']['color'])}} --}}
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
        <div class="col-12 text-center">
            <p><i>No Items In Cart!</i></p>
        </div>
        @endif
    </div>

</div>
@endsection