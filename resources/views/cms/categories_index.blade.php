@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Catrgories</h1>
</div>

              
<div class="row">
    <div class="col-12">
        <p>
          <a href="{{url('cms/categories/create')}}" class="btn btn-primary">
            <i class="fas fa-plus-circle"></i>
            Add Category
          </a>
        </p>
    </div>
</div>

<div class="row">
  <div class="col-12 mt-3">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Category Title</th>
          <th>Category Image</th>
          <th>Last Update</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $item)
        <tr>
          <td>{{$item->title}}</td>
        <td><img width="100" class="img-thumbnail" src="{{asset('images/'.$item->image)}}"></td>
          <td>{{ date('d/m/Y', strtotime($item->updated_at)) }}</td>
          <td class="text-center">
          <a href="{{url('cms/categories/'.$item->id.'/edit')}}" title="Edit Menu"><i class="far fa-edit"></i></a>
            <a class="ml-3 text-danger" href="{{url('cms/categories/'.$item->id)}}" title="Delete Menu"><i class="fas fa-trash-alt"></i></a>
          </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection