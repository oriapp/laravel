@php
    $num = 0;
@endphp

@extends('cms.cms_master')
@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

              
<div class="row">
  <div class="col-12">
      <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>User Name</th>
              <th>Phone</th>
              <th>Paid</th>
              <th>View Order</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)
            <tr>
              <td>{{$order->id}}</td>
              <td>{{$users->first()->name}}</td>
              <td>{{$users->first()->phone}}</td>
              <td>{{($order->paid) ? "Yes" : "No"}}</td>
              <td><a target="_blank" href="{{url("cms/orders/$order->id/edit")}}">View</a></td>
            </tr>
            @endforeach

          </tbody>
        </table>
  </div>
</div>

@endsection