@extends('master')
@section('content')
<div class="container">
    @component('components.page_hader')
    @slot('title') {{__('text.signin_title')}} @endslot
@slot('description') {{__('text.signin_description')}} <a href="{{url('user/signup')}}">{{__('text.signup')}}</a> @endslot
    @endcomponent
    <div class="row">
        <div class="col-lg-6">
            <form action="" method="POST" novalidate="novalidate" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="email"><code>*</code> {{__('text.email')}}</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <span class="text-danger"> {{$errors->first('email')}} </span>
                </div>
                <div class="form-group">
                    <label for="password"><code>*</code> {{__('text.password')}}</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <span class="text-danger"> {{$errors->first('password')}} </span>
                </div>
                <button type="submit" class="btn btn-primary">{{__('text.signin')}}</button>
                @if(!empty($verify_error))
            <span class="text-danger">{{$verify_error}}</span>
            @endif
            </form>
        </div>
    </div>
</div>
@endsection