@extends('master')
@section('content')


    {{-- <div class="row">
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
</div> --}}

    <!--Header area end here-->
    <!--Breadcumb area start here-->
    <section class="breadcumb-area jarallax bg-img af">
        <div class="breadcumb">
            <div class="container">

                <form novalidate="novalidate" action="" method="POST" novalidate="novalidate" autocomplete="off">
                    @csrf
                    
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="content">
                            <h2>sign in</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="javascript:void(0)">sign in</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcumb area end here-->
	<!-- weapon login wrapper start -->
	<div class="login_section">
		<!-- login_form_wrapper -->
		<div class="login_form_wrapper">
			<div class="container">
			  <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-heading">
                        <h2>login to your account</h2>
                        <p>please login to access weapon store area.</p>
                    </div>
                </div>
            </div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<!-- login_wrapper -->
					
						<div class="login_wrapper">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
									<a href="#" class="custom_btn btn-primary" id="fb_btn"> <span>Login with Facebook</span><i class="fab fa-facebook-f"></i> </a>
								</div>
								<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
									<a href="#" class="custom_btn btn-primary google-plus"> Login  with Google <i class="fab fa-google"></i> </a>
								</div>
							</div>
							<h2>or</h2>
							<div class="formsix-pos">
								<div class="form-group i-email">
                                    <label for="email"><code>*</code> {{__('text.email')}}</label>
                                    <input type="email" class="form-control" name="email" required="" id="email2" placeholder="youemail@gmail.com">
                                    <span class="text-danger"> {{$errors->first('email')}} </span>
								</div>
							</div>
							<div class="formsix-e">
                                <label for="password"><code>*</code> {{__('text.password')}}</label>
								<div class="form-group i-password">
                                    <input type="password" class="form-control" name="password" required="" id="password2" placeholder="Password *">
                                    <span class="text-danger"> {{$errors->first('password')}} </span>
								</div>
							</div>
							{{-- <div class="login_remember_box">
								<label class="control control--checkbox">Remember me
									<input type="checkbox">
									<span class="control__indicator"></span>
								</label>
								<a href="#" class="forget_password">
									Forgot Password
								</a>
							</div> --}}
							<div class="login_btn_wrapper">
                                <a class="btn btn-primary login_btn"> <button style="background-color: transparent" type="submit"> {{__('text.signin')}} </button> </a>
							</div>
							<div class="login_message">
								<p>Don’t have an account ? <a href="{{url('user/signup')}}"> Register Now </a> </p>
							</div>
						</div>
					<p>In case you are using a public/shared computer we recommend that
you logout to prevent any un-authorized access to your account</p>
						<!-- /.login_wrapper-->
					</div>
				</div>
            </div>
        </form>
	</div>
		<!-- /.login_form_wrapper-->
	</div>

	<!-- weapon login wrapper end -->
	
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