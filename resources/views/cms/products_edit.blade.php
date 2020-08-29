@php
    $colors_added = ['Black', 'Red', 'Blue', 'White', 'Green'];
@endphp


<link rel="stylesheet" href="{{asset('css/main.css')}}">

@extends('cms.cms_master')

@section('cms_content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Product Form</h1>
</div>

              
<div class="row">
    <div class="col-lg-6">
      <form id="add-menu-form" action="{{url('cms/products/' . $item->id)}}" method="POST" autocomplete="off" novalidate="novalidate" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <input type="hidden" name="item_id" value="{{$item->id}}">

          <div class="form-group">
            <label for="categorie-id">* Product Category</label>
            <select class="form-control" name="category" id="categorie-id">
              @foreach ($caregories as $category)
            <option @if($item->categorie_id == $category->id) selected="selected" @endif value="{{$category->id}}">{{$category->title}}</option>
              @endforeach
            </select>
            <span class="text-danger">{{$errors->first('category')}}</span>
          </div>

          <div class="form-group">
            <label for="title"><code>*</code> Product Title
            </label>
          <input value="{{$item->ptitle}}" type="text" name="title" id="title" class="form-control origin-filed">
          <span class="text-danger">{{$errors->first('title')}}</span>
          </div>

          <div class="form-group">
            <label for="url"><code>*</code> URL
              <small><i>(Friendly URL - Lower case, numbers, -)</i></small>
            </label>
            <input value="{{$item->purl}}" type="text" name="url" id="url" class="form-control target-filed">
            <span class="text-danger">{{$errors->first('url')}}</span>
          </div>

          <div class="form-group">
            <label for="price"><code>*</code> Product Price
            </label>
          <input value="{{$item->price}}" type="text" name="price" id="price" class="form-control">
          <span class="text-danger">{{$errors->first('price')}}</span>
          </div>


          <div class="form-group">
            <label for="old-price">Old Product Price
            </label>
          <input value="{{$item->old_price}}" type="text" name="old-price" id="old-price" class="form-control">
          <span class="text-danger">{{$errors->first('old-price')}}</span>
          </div>

          <div class="form-group">
            <label for="article"><code>*</code> Product Description
            </label>
          <textarea name="description" id="article" cols="30" rows="10" class="form-control">{{$item->particle}}</textarea>
            <span class="text-danger">{{$errors->first('description')}}</span>
          </div>

          <div class="form-group">
            <img class="img-thumbnail" src="{{asset('images/'.$item->pimage)}}" width="100">
            </div>
          <div class="form-group">
            <label for="image">Change Product Image
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
              <label for="short"><code>*</code> Short Description
              </label>
            <input value="{{$item->in_short}}" type="text" name="short" id="short" class="form-control">
            <span class="text-danger">{{$errors->first('short')}}</span>
            </div>
          

          <div class="form-row mb-2">
            <div class="form-group col-md-6">
            <label for="brand"><code>*</code> Brand</label>
            <input value="{{$item->brand}}" type="brand" name="brand" id="brand" class="form-control">
            <span class="text-danger"> {{$errors->first('brand')}} </span>
            </div>


            <div class="form-group col-md-4">
            <label for="weight"><code>*</code> Weight <i>(In Kilograms)</i></label>
            <input value="{{$item->weight}}" type="weight" name="weight" id="weight" class="form-control">
            <span class="text-danger"> {{$errors->first('weight')}} </span>
            </div>


            <div class="form-group col-md-4">
              <label for="amount"><code>*</code> Amount</label>
              <input value="{{$item->amount}}" type="amount" name="amount" id="amount" class="form-control">
              <span class="text-danger"> {{$errors->first('weight')}} </span>
              </div>


        <div class="form-group col-md-4">
            <label for="pru">producer</label>
        <input value="{{$item->producer}}" type="pru" name="pru" id="pru" class="form-control">
        <span class="text-danger"> {{$errors->first('pru')}} </span>
        </div>
        </div>


        <div class="form-group">
          <label for="visibility">* Item visibility</label>
          <select class="form-control" name="visibility" id="visibility">
            @php
                if($item->visibility == '1'){
                  $itemvisibilityname = 'On';
                } else {
                  $itemvisibilityname = 'off';
                }
            @endphp
            <option selected="selected" value="{{$item->visibility}}">{{$itemvisibilityname}} (default)</option>
          <option value="1">On</option>
          <option value="0">Off</option>
          </select>
          <span class="text-danger">{{$errors->first('visibility')}}</span>
        </div>



        <div class="form-group">
          <label for="colors">* Item color</label>
          <select multiple="multiple" name="colors[]" multiple data-placeholder="Add tools" name="colors" id="colors">

            @if ($item->colors != null)
            @foreach (unserialize($item->colors) as $cat)
            <option @if($cat) selected="selected" @endif value="{{$cat}}">{{$cat}}</option>

            <?php
            unset($colors_added[array_flip($colors_added)[$cat]]);
            ?>
            
              @endforeach
              @endif

            @foreach ($colors_added as $itm)
            <option value="{{$itm}}">{{$itm}}</option>
            @endforeach
            
        </select>
        
        <!-- dribbble -->
        <a class="dribbble" ><img src="https://www.payvision.com/assets/img/logos/visa-secure.png" alt=""></a>
        </div>



        <br>
          <input type="submit" name="submit" value="Update Product" id="submit" class="btn btn-primary mb-2">
          <a href="{{url('cms/products')}}" class="btn btn-light ml-3">Cancel</a>

        </form>
    </div>
</div>

<br><br><br>
@endsection