@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Order Form</h1>
</div>

              
<div class="row">
    <div class="col-lg-6">
      <form id="add-menu-form" action="{{url('cms/orders/' . $item->id)}}" method="POST" autocomplete="off" novalidate="novalidate" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <input type="hidden" name="item_id" value="{{$item->id}}">

        {{-- {{dd($order->first()->name)}} --}}
          <div class="form-group">
            <label for="title">Orderd By
            </label>
          <input disabled value="{{$order->first()->name}}" type="text" name="title" id="title" class="form-control origin-filed">
          <span class="text-danger">{{$errors->first('title')}}</span>
          </div>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Items Orderd</th>
              </tr>
            </thead>
            <tbody>
            <tr>
            <td>
              <ul>
                @foreach (unserialize($item->data) as $item)
                    <li>
                    <b>{{$item['name']}}</b>,
                    <b>Price: </b> ${{$item['price']}}
                    <b>Quantity: </b> {{$item['quantity']}}
                    </li>
                @endforeach
              </ul>
            </td>
      
            </tr>
            </tbody>
          </table>


          <div class="form-group">
            <label for="title">Paid?
            </label>
            @php
                //dd($order->first()->paid)

                if($order->first()->paid == "0"){
                  $order->first()->paid = "No";
                } elseif ($order->first()->paid == "1"){
                  $order->first()->paid = "Yes";
                } else {
                  $order->first()->paid;
                }
            @endphp
          <input disabled value="{{$order->first()->paid}}" type="text" name="title" id="title" class="form-control origin-filed">
          <span class="text-danger">{{$errors->first('title')}}</span>
          </div>


        <br>
          <input type="submit" name="submit" value="Update Product" id="submit" class="btn btn-primary mb-2">
          <a href="{{url('cms/orders')}}" class="btn btn-light ml-3">Cancel</a>

        </form>
    </div>
</div>

<br><br><br>
@endsection