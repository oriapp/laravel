@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Content</h1>
</div>

              
<div class="row">
    <div class="col-12">
        <p>
          <a href="{{url('cms/content/create')}}" class="btn btn-primary">
            <i class="fas fa-plus-circle"></i>
            Add Content Link
          </a>
        </p>
    </div>
</div>

<div class="row">
  <div class="col-12 mt-3">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Content Title</th>
          <th>Last Update</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($content as $item)
        <tr>
          <td>{{$item->ctitle}}</td>
          <td>{{ date('d/m/Y', strtotime($item->updated_at)) }}</td>
          <td class="text-center">
          <a href="{{url('cms/content/'.$item->id.'/edit')}}" title="Edit Content"><i class="far fa-edit"></i></a>
            <a class="ml-3 text-danger" href="{{url('cms/content/'.$item->id)}}" title="Delete Content"><i class="fas fa-trash-alt"></i></a>
          </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection