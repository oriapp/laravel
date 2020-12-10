@extends('master')
@section('content')


<!--Breadcumb area start here-->
<section class="breadcumb-area jarallax bg-img af">
    <div class="breadcumb">
        <div class="container">

            <form novalidate="novalidate" action="" method="POST" novalidate="novalidate" autocomplete="off">
                @csrf

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="content">
                        <h2>{{__('sign.register')}}</h2>
                        <ul>
                            <li><a href="{{url('')}}">{{__('sign.home')}}</a></li>
                            <li><a href="javascript:void(0)">{{__('sign.register')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcumb area end here-->
<!--register area start here-->
<div class="register_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-heading">
                        <h2>{{__('sign.signup_title')}}</h2>
                        <p>{{__('sign.signup_description')}}</p>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                            <div class="register_wrapper_box">
                                <div class="register_left_form">

                                <div class="jp_regiter_top_heading">
                                    <p>{{__('sign.signup_mandetory')}} </p>
                                </div>
                                <div class="row clearfix">
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" id="email" value="" placeholder="{{__('sign.email')}}*">
                                        <span class="text-danger"> {{$errors->first('email')}} </span>
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" value="" id="name" placeholder="{{__('sign.username')}}*">
                                        <span class="text-danger"> {{$errors->first('name')}} </span>
                                    </div>
                                     <!--Form Group-->
                                     <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" value="" id="phone" placeholder="{{__('sign.phone')}}*">
                                        <span class="text-danger"> {{$errors->first('phone')}} </span>
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="password" value="" id="password" placeholder="{{__('sign.password')}}*">
                                        <span class="text-danger"> {{$errors->first('password')}} </span>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="check-box text-center">
                                            <input type="checkbox"  checked="true" name="shipping-option" id="account-option_2"> &ensp;
                                            <label for="account-option_2" class="label_2">{{__('sign.signup_agree_1')}} <a target="_blank" href="{{url('privacy/terms')}}" class="check_box_anchr">{{__('sign.signup_agree_2')}}</a> {{__('sign.signup_agree_3')}}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="login_btn_wrapper register_btn_wrapper login_wrapper register_wrapper_btn">
                                    <button style="background: transparent">
                                    <a type="submit" class="btn btn-primary login_btn">Register </a>
                                    <button>
                                </div>
                                <div class="login_message">
                                    <p>{{__('sign.already_member')}}<a href="{{url('user/signin')}}"> {{__('sign.login_here')}} </a> </p>
                                </div>

                            </div>
                             
                            </div>
                             <p class="btm_txt_register_form">In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account</p>
                        </div>
                   </div>
             </div>
            </form>
   </div>
<!--register area start end-->
 <!--Subscribe area start here-->
<section class="subscribe-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="subscribe subscribe_2">
                    <span class="ico"><i class="far fa-envelope"></i></span>
                    <div class="conts">
                        <h2>Get Our Latest News</h2>
                        <p>Subscribe our Newsletter Now !</p>
                    </div>
                    <form>
                        <input type="email" placeholder="Email Address">
                        <button type="submit" class="btn1">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Subscribe area End here-->

@endsection