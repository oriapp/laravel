@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Menu</h1>
</div>

              
<div class="row">
    <div class="col-12">
        <p>
          <a href="{{url('cms/menu/create')}}" class="btn btn-primary">
            <i class="fas fa-plus-circle"></i>
            Add Menu Link
          </a>
        </p>
    </div>
</div>

<div class="row">
  <div class="col-12 mt-3">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Link</th>
          <th>Url</th>
          <th>Title</th>
          <th>Last Update</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($menu as $item)
        <tr>
          <td>{{$item->link}}</td>
          <td>{{$item->url}}</td>
          <td>{{$item->title}}</td>
          {{-- <td>{{ date('d/m/Y', strtotime($item->updated_at)) }}</td> --}}
          <td>{{Carbon::parse($item->updated_at)->locale(Session::get('locale'))->diffForHumans()}}</td>
          <td class="text-center">
          <a href="{{url('cms/menu/'.$item->id.'/edit')}}" title="Edit Menu"><i class="far fa-edit"></i></a>
            <a class="ml-3 text-danger" href="{{url('cms/menu/'.$item->id)}}" title="Delete Menu"><i class="fas fa-trash-alt"></i></a>
          </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection