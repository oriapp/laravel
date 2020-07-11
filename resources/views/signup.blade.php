@extends('master')
@section('content')
<div class="container">
    @component('components.page_hader')
    @slot('title') Signup page @endslot
    @slot('description') Here you can open a free new account @endslot
    @endcomponent
    <div class="row">
        <div class="col-lg-6">
            <form action="" method="POST" novalidate="novalidate" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="name">* Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <span class="text-danger"> {{$errors->first('name')}} </span>
                </div>
                <div class="form-group">
                    <label for="email">* Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <span class="text-danger"> {{$errors->first('email')}} </span>
                </div>
                <div class="form-group">
                    <label for="password">* Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <span class="text-danger"> {{$errors->first('password')}} </span>
                </div>
                <button type="submit" class="btn btn-primary">Signup</button>
            </form>
        </div>
    </div>
</div>
@endsection