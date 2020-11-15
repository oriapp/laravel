@extends('master')
@section('content')

<style>
    .about {
    min-height: 750px;
}
</style>

<section class="breadcumb-area jarallax bg-img af">
    <div class="breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="content">
                        <h2>{{$contents->first()->title}}</h2>
                        {{-- {{dd($contents)}} --}}
                        <ul>
                            <li><a href="{{url('')}}">Home</a></li>
                            <li><a href="javascript:void(0)">{{strtolower($contents->first()->title)}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="about-area section bg-img about jarallax">
    <div class="container">
    @foreach($contents as $content)
    <div class="row">
        <div class="col-12 mt-3">
        <h2>{{$content->ctitle}}</h2>
        <p>{!! $content->carticle !!}</p>
        </div>
    </div>
    @endforeach
</div>
</div>



@endsection