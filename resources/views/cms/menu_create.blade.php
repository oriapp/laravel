@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Menu Form</h1>
</div>

              
<div class="row">
    <div class="col-lg-6">
        <form id="add-menu-form" action="" method="POST" autocomplete="off" novalidate="novalidate">
          @csrf

          <div class="form-group">
            <label for="link">* Menu Link</label>
          <input value="{{old('link')}}" type="text" name="link" id="link" class="form-control">
          <span class="text-danger">{{$errors->first('link')}}</span>
          </div>

          <div class="form-group">
            <label for="url">* URL</label>
            <input value="{{old('url')}}" type="text" name="url" id="url" class="form-control">
            <span class="text-danger">{{$errors->first('url')}}</span>
          </div>

          <div class="form-group">
            <label for="title">* Page Link</label>
            <input value="{{old('title')}}" type="text" name="title" id="title" class="form-control">
            <span class="text-danger">{{$errors->first('title')}}</span>
          </div>

          <input type="submit" name="submit" value="Save Menu" id="submit" class="btn btn-primary">
          <a href="{{url('cms/menu')}}" class="btn btn-light ml-3">Cancel</a>

        </form>
    </div>
</div>


@endsection