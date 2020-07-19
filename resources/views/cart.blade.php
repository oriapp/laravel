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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $item)
                        <tr>
                            <td>{{$item['name']}}</td>
                            <td class="text-center">
                            <button data-pid="{{$item['id']}}" data-op="minus" type="button" href="#" class="update-cart-btn btn btn-outline-primary btn-sm"><i class="fas fa-minus-circle"></i></button>
                            <input size="1" class="text-center" type="text" value="{{$item['quantity']}}">
                                <button data-pid="{{$item['id']}}" data-op="plus" type="button" href="#" class="update-cart-btn btn btn-outline-primary btn-sm"><i class="fas fa-plus-circle"></i></button>
                            </td>
                            <td>{{$item['price']}}</td>
                            <td>${{$item['quantity'] * $item['price']}}</td>
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
            <a href="{{url('shop/checkout')}}" class="btn btn-primary btn-lg">Buy Now!</a>
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