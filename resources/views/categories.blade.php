@extends('master')
@section('content')

@if($categories->count() )

<!--Breadcumb area start here-->
<section class="breadcumb-area jarallax bg-img af">
  <div class="breadcumb">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="content">
                      <h2>Categories</h2>
                      <ul>
  <li><a href="{{url('')}}">Home</a></li>
  <li><a href="javascript:void(0)">Categories</a></li>
</ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--Breadcumb area end here-->

<!-- categories start here -->
<section class="shop-page section bg-img jarallax">
  <div class="container">
<div class="row">
  <div class="col-md-12 col-sm-12 pd-0">
      <div class="pro-sliders">

        @foreach($categories as $category)
        
                    <div class="col-sm-12">
          <div class="products">
          <figure><img src="{{asset('images/' . $category->image)}}" alt="" /></figure>
              <div class="contents">
              <h3>{{$category->title}}</h3>
                  <br>
                  <a href="{{url('shop/'.$category->url)}}" class="btn4">{{__('text.view')}}</a>
              </div>
          </div>
      </div>
@endforeach
             
         </div>
</div>
</div>
</div>

</section>
<!--categories area end here-->

@endif


@endsection