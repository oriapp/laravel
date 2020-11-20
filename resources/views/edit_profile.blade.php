@php
    if($user->language == 'he'){
      $user->language = 'Hebrew';
    } else if ($user->language = 'en'){
      $user->language = 'English';
    }
@endphp

@extends('master')
@section('content')
<div class="container">
    @component('components.page_hader')
    @slot('title') {{__('text.editp_title')}} @endslot
    @slot('description') {{__('text.home_description')}} @endslot
    @endcomponent
</div>

<h1 align="center">edit this profile</h1>

{{-- {{dd($user)}} --}}

<div class="container">    
    <div class="jumbotron">
      <div class="row">
          <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
              <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
          </div>
          <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
              <div class="container" style="border-bottom:1px solid black">
                <h2>{{$user->name}}</h2>
              </div>
                <hr>
              <ul class="container details">
                <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>Phone: {{$user->phone ?? 'Could not find'}}</p></li>
                <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>Email: {{$user->email}}</p></li>
              
              <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Primary Language: {{$user->language}}</p></li>
              <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Created: {{RealTime::parse($user->created_at)->locale(Session::get('locale'))->diffForHumans()}}</p></li>
              </ul>
          </div>
      </div>
    </div>



@endsection