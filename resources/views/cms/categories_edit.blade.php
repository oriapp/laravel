@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Category Form</h1>
</div>

              
<div class="row">
    <div class="col-lg-6">
    <form id="add-menu-form" action="{{url('cms/categories/' . $item->id)}}" method="POST" autocomplete="off" novalidate="novalidate" enctype="multipart/form-data">
          @csrf
          {{method_field('PUT')}}
    <input type="hidden" name="item_id" value="{{$item->id}}">
          <div class="form-group">
            <label for="title"><code>*</code> Category Title
            </label>
          <input value="{{$item->title}}" type="text" name="title" id="title" class="form-control origin-filed">
          <span class="text-danger">{{$errors->first('title')}}</span>
          </div>

          <div class="form-group">
            <label for="url"><code>*</code> Category URL
              <small><i>(Friendly URL - Lower case, numbers, -)</i></small>
            </label>
            <input value="{{$item->url}}" type="text" name="url" id="url" class="form-control target-filed">
            <span class="text-danger">{{$errors->first('url')}}</span>
          </div>

          <div class="form-group">
            <label for="article"><code>*</code> Category Description
            </label>
          <textarea name="description" id="article" cols="30" rows="10" class="form-control">{{$item->description}}</textarea>
            <span class="text-danger">{{$errors->first('description')}}</span>
          </div>

          <div class="form-group">
          <img class="img-thumbnail" src="{{asset('images/'.$item->image)}}" width="100">
          </div>
          <div class="form-group">
            <label for="image">Change Category Image
              <small><i>(Optional)</i></small>
            </label>
          </div>
          <div class="input-group mb-5">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
              <input name="image" type="file" class="custom-file-input image-file-upload" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
          <div class="form-group">
            <span class="text-danger">{{$errors->first('image')}}</span>
          </div>

          <input type="submit" name="submit" value="Update Category" id="submit" class="btn btn-primary mb-2">
          <a href="{{url('cms/categories')}}" class="btn btn-light ml-3">Cancel</a>

        </form>
    </div>
</div>


@endsection