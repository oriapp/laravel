@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Menu Form</h1>
</div>

              
<div class="row">
    <div class="col-lg-6">
    <form id="add-menu-form" action="{{url('cms/menu/' . $item->id )}}" method="POST" autocomplete="off" novalidate="novalidate">
          @csrf
          {{ method_field('PUT') }}
    <input type="hidden" name="item_id" value="{{$item->id}}">
          <div class="form-group">
            <label for="link"><code>*</code> Menu Link
            </label>
          <input value="{{$item->link}}" type="text" name="link" id="link" class="form-control origin-filed">
          <span class="text-danger">{{$errors->first('link')}}</span>
          </div>

          <div class="form-group">
            <label for="url"><code>*</code> URL
              <small><i>(Friendly URL - Lower case, numbers, -)</i></small>
            </label>
            <input value="{{$item->url}}" type="text" name="url" id="url" class="form-control target-filed">
            <span class="text-danger">{{$errors->first('url')}}</span>
          </div>

          <div class="form-group">
            <label for="title"><code>*</code> Page Link
            </label>
            <input value="{{$item->title}}" type="text" name="title" id="title" class="form-control">
            <span class="text-danger">{{$errors->first('title')}}</span>
          </div>

          <input type="submit" name="submit" value="Update Menu" id="submit" class="btn btn-primary">
          <a href="{{url('cms/menu')}}" class="btn btn-light ml-3">Cancel</a>

        </form>
    </div>
</div>


@endsection