@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Are you sure want to DELETE this item?</h1>
</div>

              
<div class="row">
    <div class="col-lg-6">
    <form action="{{url('cms/products/'.$item_id)}}" method="POST" autocomplete="off" novalidate="novalidate">
          @csrf
          {{ method_field('DELETE') }}
          <input type="submit" name="submit" value="DELETE" id="submit" class="btn btn-danger">
          <a href="{{url('cms/products')}}" class="btn btn-light ml-3">Cancel</a>

        </form>
    </div>
</div>


@endsection