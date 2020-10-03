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
                
                @php
                        $color = null;
                        $size = null;

                        (!empty($item['attributes']['color'])) ? $color = $item['attributes']['color'] : $color = null;

                        (!empty($item['attributes']['size'])) ? $size = $item['attributes']['size'] : $size = null;

                        ($color == null && $size == null) ? $color = "Ask the customer":true;

                        
                @endphp

                    <li>
                    <b>{{$item['name']}} </b>,
                    <b>Price: </b> ${{$item['price']}}
                    <b>Quantity: </b> {{$item['quantity']}}
                    <br>
                    <b>Color/Size: </b><code>{{$color}} {{$size}}</code> 
                    </li>
                    <hr><br>
                @endforeach
              </ul>
            </td>
      
            </tr>
            </tbody>
          </table>



          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Adreess</th>
              </tr>
            </thead>
            <tbody>
            <tr>
            <td>
              <ul>
                @php
                //dd($order->first()->details);
                $order->first()->details = explode('%space$',$order->first()->details);
                    //dd($order->first()->details); 
                    
                @endphp
                @foreach ($order->first()->details as $item => $key)

                    <li>
                    <b>{{$key}} {{$item}}</b>
                    </li>
                @endforeach
              </ul>
            </td>
      
            </tr>
            </tbody>
          </table>


          <div class="form-group">
            <label for="paid">Paid?
              <i>(type <code>Yes</code> or <code>No</code>)</i>
            </label>
            @php
                if($order->first()->paid == "0"){
                  $order->first()->paid = "No";
                } elseif ($order->first()->paid == "1"){
                  $order->first()->paid = "Yes";
                } else {
                  $order->first()->paid;
                }
            @endphp
          <input value="{{$order->first()->paid}}" type="text" name="paid" id="paid" class="form-control origin-filed">
          <span class="text-danger">{{$errors->first('paid')}}</span>
          </div>



          <div class="form-group">
            <label for="details">Payment Info
              <i>Write Payment number, via where did he pay and staff like this. <code>Leave it empty if he didn't pay</code></i>
            </label>
          <input value="{{$order->first()->payment_info}}" type="text" name="details" id="details" class="form-control origin-filed">
          <span class="text-danger">{{$errors->first('details')}}</span>
          </div>


        <br>
          <input type="submit" name="submit" value="Update Product" id="submit" class="btn btn-primary mb-2">
          <a href="{{url('cms/orders')}}" class="btn btn-light ml-3">Cancel</a>

        </form>
    </div>
</div>

<br><br><br>
@endsection