@extends('master')
@section('content')
<div class="container">
    @foreach($contents as $content)
    <div class="row">
        <div class="col-12 mt-3">
        <h2>{{$content->ctitle}}</h2>
        <p>{{$content->carticle}}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection