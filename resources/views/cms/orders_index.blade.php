@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Shop Orders</h1>
</div>



<div class="row">
  <div class="col-12 mt-3">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>User</th>
          <th>Total</th>
          <th>Oder Details</th>
          <th>Oder Uniq ID</th>
          <th>Order Date</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $order)
      <tr>
        <td>{{$order->name}}</td>
      <td>${{$order->total}}</td>
      <td>
        <ul>
          @foreach (unserialize($order->data) as $item)
              <li>
              <b>{{$item['name']}}</b>,
              <b>Price: </b> ${{$item['price']}}
              <b>Quantity: </b> {{$item['quantity']}}
              </li>
          @endforeach
        </ul>
      </td>
      <td>{{$order->order_id}}</td>
      <td>{{date('d/m/y H:i:s', strtotime($order->created_at))}}</td>

      <td class="text-center">
        <a href="{{url('cms/orders/'.$order->id.'/edit')}}" title="Edit Order"><i class="far fa-edit"></i></a>
          
        {{-- <a class="ml-3 text-danger" href="{{url('cms/orders/'.$order->id)}}" title="Delete Order"><i class="fas fa-trash-alt"></i></a> --}}
        </td>

      </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<span>{{$orders->links()}}</span>

@endsection