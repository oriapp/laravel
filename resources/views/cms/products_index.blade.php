@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Products</h1>
</div>

              
<div class="row">
    <div class="col-12">
        <p>
          <a href="{{url('cms/products/create')}}" class="btn btn-primary">
            <i class="fas fa-plus-circle"></i>
            Add Product
          </a>
        </p>
    </div>
</div>

<div class="row">
  <div class="col-12 mt-3">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Product Title</th>
          <th>Product Category</th>
          <th>Price</th>
          <th>Product Image</th>
          <th>Last Update</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $item)
        {{-- {{dd($item)}} --}}
        <tr>
          <td>{{$item->ptitle}}</td>
          <td>{{$item->title}}</td>
          <td>{{$item->price}}</td>
        <td><img width="100" class="img-thumbnail" src="{{asset('images/'.$item->pimage)}}"></td>
          {{-- <td>{{ date('d/m/Y', strtotime($item->updated_at)) }}</td> --}}
          <td>{{Carbon::parse($item->updated_at)->locale(Session::get('locale'))->diffForHumans()}}</td>
          <td class="text-center">
          <a href="{{url('cms/products/'.$item->id.'/edit')}}" title="Edit Menu"><i class="far fa-edit"></i></a>
            <a class="ml-3 text-danger" href="{{url('cms/products/'.$item->id)}}" title="Delete Menu"><i class="fas fa-trash-alt"></i></a>
          </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<span>{{ $products->appends(['orderby' => 'category'])->links() }}</span>

@endsection