@extends('master')
@section('content')
<div class="container">
    @component('components.page_hader')
    @slot('title') {{__('text.home_title')}} @endslot
    @slot('description') {{__('text.home_description')}} @endslot
    @endcomponent
</div>

<div class="container">
<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half img-fluid" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox" style="width: 100%; height: 500px; object-fit: cover; ">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" style="object-fit: cover" src="{{asset('/images/rsz_banner2.jpg')}}" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">This is the first title</h3>
        <p>First text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" style="width: 100%;" style="object-fit: cover" src="{{asset('/images/rsz_1banner1.png')}}" alt="Second slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Thir is the second title</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      
      <div class="view">
        <img class="d-block w-100" style="width: 100%;" style="background-size: contain, cover; background-repeat: no-repeat;" src="https://mdbootstrap.com/img/Photos/Slides/img%20(108).jpg" alt="Third slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">This is the third title</h3>
        <p>Third text</p>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
</div>


<style>
  .imgContainer{
    float:left !important;
    flex-direction: column !important !important;
}

.cardd {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    /* flex-direction: column; */
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
</style>


<div class="mt-4 mb-4">
  <div class="container mt-4">
    <blockquote class="blockquote text-center">
      <p class="mb-0"> {{__('text.partners')}} </p>
      <footer class="blockquote-footer">Provider <cite title="Source Title">And Companies</cite></footer>
    </blockquote>
    <div class="card mt-4">

      {{-- <div class="imgContainer">
      <img src="{{asset('/images/home/police.png')}}"height="200" width="200"/>
    </div>
    <div class="imgContainer">
      <img src="{{asset('/images/home/airplane.jpg')}}"height="200" width="200"/>
    </div>
    </div> --}}

    <div class="container">
      <div class="row align-items-stretch justify-content-start card-deck">
       <div class="card text-center border-0">
         <div class="card-body">
          <div class="card-text">
            <img style="max-height: 150px;" src="{{asset('/images/home/police.png')}}" alt="">
          </div>
         </div>
       </div>
       <div class="card text-center border-0">
         <div class="card-body">
          <div class="card-text">
            <img style="max-height: 150px;" src="{{asset('/images/home/Israel_Army-logo-615F4A31D8-seeklogo.com.png')}}" alt="">
          </div>
         </div>
       </div>
       <div class="card text-center border-0">
         <div class="card-body">
          <div class="card-text">
            <img style="max-height: 150px;" src="{{asset('/images/home/משרד-הביטחון.png')}}" alt="">
          </div>
         </div>
       </div>
       <div class="w-100">
    
       </div>
       <div class="card text-center border-0">
         <div class="card-body">
          <div class="card-text">
            <img style="max-height: 150px;" src="{{asset('/images/home/1200px-FireDepIsrael.svg.png')}}" alt="">
          </div>
         </div>
       </div>
       <div class="card text-center border-0">
         <div class="card-body">
          <div class="card-text">
            <img style="max-height: 150px;" src="{{asset('/images/home/1200px-Israel_prison_service_Icon_2018.svg.png')}}" alt="">
          </div>
         </div>
       </div>
       <div class="card text-center border-0">
        <div class="card-body">
         <div class="card-text">
           <img style="max-height: 150px;" src="{{asset('/images/home/airplane.jpg')}}" alt="">
         </div>
        </div>
      </div>
      </div>
    </div>
    
  </div>
</div>





@endsection