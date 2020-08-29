@extends('master')
@section('content')
<div class="container">
    @component('components.page_hader')
    @slot('title') {{__('text.signup_title')}} @endslot
    @slot('description') {{__('text.signup_description')}} <a href="{{url('user/signin')}}">{{__('text.signin')}}</a> @endslot
    @endcomponent
    <div class="alert alert-danger" role="alert">
        {!!__('text.signup_warning')!!}
      </div>
    <div class="row">
        <div class="col-lg-6">
            <form action="" method="POST" novalidate="novalidate" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="name"><code>*</code> {{__('text.name')}}</label>
                    <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control">
                    <span class="text-danger"> {{$errors->first('name')}} </span>
                </div>
                <div class="form-group">
                    <label for="email"><code>*</code> {{__('text.email')}}</label>
                    <input value="{{old('')}}" type="email" name="email" id="email" class="form-control">
                    <span class="text-danger"> {{$errors->first('email')}} </span>
                </div>
                <div class="form-group">
                    <label for="password"><code>*</code> {{__('text.password')}}</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <span class="text-danger"> {{$errors->first('password')}} </span>
                </div>

                {{-- <div class="form-group">
                    <label for="address"><code>*</code> {{__('text.address')}}</label>
                    <input value="{{old('address')}}" type="address" name="address" id="address" class="form-control">
                    <span class="text-danger"> {{$errors->first('address')}} </span>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="city"><code>*</code> {{__('text.city')}}</label>
                    <input value="{{old('city')}}" type="city" name="city" id="city" class="form-control">
                    <span class="text-danger"> {{$errors->first('city')}} </span>
                    </div>


                    <div class="form-group col-md-4">
                    <label for="state"><code>*</code> {{__('text.state')}}</label>
                    <input value="{{old('state')}}" type="state" name="state" id="state" class="form-control">
                    <span class="text-danger"> {{$errors->first('state')}} </span>
                </div>

                <div class="form-group col-md-2">
                    <label for="zip"><code>*</code> {{__('text.zip')}}</label>
                <input value="{{old('zip')}}" type="zip" name="zip" id="zip" class="form-control">
                    <span class="text-danger"> {{$errors->first('zip')}} </span>
                </div>
                </div> --}}

                <div class="form-group">
                <label for="phone"><code>*</code> {{__('text.phone')}}</label>
                    <input value="{{old('phone')}}" type="text" name="phone" id="phone" class="form-control">
                    <span class="text-danger"> {{$errors->first('phone')}} </span>
                </div>


                <div class="form-group">
                    <label for="language"><code>*</code> {{__('text.select_language')}}</label>
                    <select class="form-control" name="Language" id="language">
                      <option value="en" name="en" id="en">English</option>
                      <option value="he" name="he" id="he">Hebrew</option>
                    </select>
                    <span class="text-danger">{{$errors->first('language')}}</span>
                  </div>
                  

                <button type="submit" class="mb-3 btn btn-primary">{{__('text.signup')}}</button>
            </form>
        </div>
    </div>
</div>
@endsection