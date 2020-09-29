<link rel="stylesheet" href="{{asset('css/main.css')}}">


@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Product Form</h1>
</div>

              
<div class="row">
    <div class="col-lg-6 mb-4">
    <form id="add-menu-form" action="{{url('cms/products')}}" method="POST" autocomplete="off" novalidate="novalidate" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="categorie-id">* Product Category</label>
            <select class="form-control" name="category" id="categorie-id">
              <option value="">Choose Category...</option>
              @foreach ($caregories as $category)
            <option @if(old('category') == $category->id) selected="selected" @endif value="{{$category->id}}">{{$category->title}}</option>
              @endforeach
            </select>
            <span class="text-danger">{{$errors->first('category')}}</span>
          </div>

          <div class="form-group">
            <label for="title"><code>*</code> Product Title
            </label>
          <input value="{{old('title')}}" type="text" name="title" id="title" class="form-control origin-filed">
          <span class="text-danger">{{$errors->first('title')}}</span>
          </div>

          <div class="form-group">
            <label for="url"><code>*</code> URL
              <small><i>(Friendly URL - Lower case, numbers, -)</i></small>
            </label>
            <input value="{{old('url')}}" type="text" name="url" id="url" class="form-control target-filed">
            <span class="text-danger">{{$errors->first('url')}}</span>
          </div>

          <div class="form-group">
            <label for="price"><code>*</code> Product Price
            </label>
          <input value="{{old('price')}}" type="text" name="price" id="price" class="form-control">
          <span class="text-danger">{{$errors->first('price')}}</span>
          </div>

          <div class="form-group">
            <label for="old-price">Old Product Price
            </label>
          <input value="{{old('old-price', '0.00')}}" type="text" name="old-price" id="old-price" class="form-control">
          <span class="text-danger">{{$errors->first('old-price')}}</span>
          </div>

          <div class="form-group">
            <label for="article"><code>*</code> Product Description
            </label>
          <textarea name="description" id="article" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
            <span class="text-danger">{{$errors->first('description')}}</span>
          </div>

          <div class="form-group">
            <label for="image">Product Image
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



          <div class="form-group">
            <label for="short"><code>*</code> Short Description</label>
            <input value="{{old('short')}}" type="short" name="short" id="short" class="form-control">
            <span class="text-danger"> {{$errors->first('short')}} </span>
            </div>


            <div class="form-row mb-2">
              <div class="form-group col-md-6">
              <label for="brand"><code>*</code> Brand</label>
              <input value="{{old('brand')}}" type="brand" name="brand" id="brand" class="form-control">
              <span class="text-danger"> {{$errors->first('brand')}} </span>
              </div>


            <div class="form-group col-md-4">
            <label for="weight"><code>*</code> Weight <i>(In Kilograms)</i></label>
            <input value="{{old('weight')}}" type="weight" name="weight" id="weight" class="form-control">
            <span class="text-danger"> {{$errors->first('weight')}} </span>
            </div>


            <div class="form-group col-md-4">
              <label for="amount"><code>*</code> Amount</label>
              <input value="{{old('amount')}}" type="amount" name="amount" id="amount" class="form-control">
              <span class="text-danger"> {{$errors->first('weight')}} </span>
              </div>

        
        <div class="form-group col-md-4">
          <label for="pru">producer</label>
          <input value="{{old('pru')}}" type="pru" name="pru" id="pru" class="form-control">
          <span class="text-danger"> {{$errors->first('pru')}} </span>
        </div>
        </div>

        <hr>

        <div class="form-group">
          <label for="visibility">* Item visibility</label>
          <select class="form-control" name="visibility" id="visibility">
          <option selected="selected" value="1">On</option>
          <option value="0">Off</option>
          </select>
          <span class="text-danger">{{$errors->first('visibility')}}</span>
        </div>



        <link rel="stylesheet" href="{{'/css/cmsSize.css'}}">

        <hr><br>

        <div class="form-group">
          <label for="color"><code>*</code> Colors
            <i>(Put <code style="font-size: 40px">,</code> between each color to separate them)</i></label>
          <input value="{{old('color')}}" type="text" name="color" id="color" class="form-control">
          <span class="text-danger"> {{$errors->first('color')}} </span>
          </div>


      <div class="form-group">
        <label for="size"><code>*</code> Sizes
          <i>(Put <code style="font-size: 40px">,</code> between each size to separate them)</i></label>
        <input value="{{old('size')}}" type="text" name="size" id="size" class="form-control">
        <span class="text-danger"> {{$errors->first('size')}} </span>
        </div>

        

        <br>
          <input type="submit" name="submit" value="Save Product" id="submit" class="btn btn-primary mb-2">
          <a href="{{url('cms/products')}}" class="btn btn-light ml-3">Cancel</a>

        </form>
    </div>
</div>

<br><br><br>
@endsection