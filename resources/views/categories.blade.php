 @extends('master')
@section('content')
<div class="container">
@component('components.page_hader')
    @slot('title') {{__('text.categories_title')}} @endslot
    @slot('description') {{__('text.categories_description')}} @endslot
    @endcomponent
    <div class="row"> 
        @if($categories->count() )
        @foreach($categories as $category)
        <div class="col-lg-6 col-xl-4 mb-3">
            <div class="card">
            <img height="150" src="{{asset('images/' . $category->image)}}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">{{$category->title}}</h5>
                <p class="card-text">{!!$category->description!!}</p>
                  <p class="text-center">
                    <a href="{{url('shop/'.$category->url)}}" class="btn btn-primary">{{__('text.view_products_btn')}}</a>
                  </p>
                </div>
              </div>
        </div>
        @endforeach
        @else
        <div class="col-12 text-center mt-3">
            <p><i>No Categories Found</i></p>
        </div>
        @endif
    </div>
    </div>
</div>
@endsection