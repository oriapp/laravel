@extends('master')
@section('content')

   <!--Breadcumb area start here-->
   <section class="breadcumb-area jarallax bg-img af">
    <div class="breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="content">
                        <h2>Contact us</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="javascript:void(0)">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcumb area end here-->

<section class="contact-area section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                {{-- <div class="map-area">
                    <a href="#" class="go-map">Go to Map</a>
                    <div id="map" class="map-full" style="width:100%; height:450px;"></div>
                </div> --}}
            </div>
        </div>
        <div class="row mr-b50">
            <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
                <div class="contact-info">
                    <span><i class="fa fa-map-marker"></i></span>
                    <p>Sector # 48, 123 Street,
                        <br> Colony, INDIA</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
                <div class="contact-info">
                    <span><i class="fa fa-phone"></i></span>
                    <p>+8100 376 6284,</p>
                    <p>+8100 255 6858 </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
                <div class="contact-info">
                    <span><i class="fa fa-envelope"></i></span>
                    <p>weapons@example.com</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-heading">
                    <h2>Get in touch</h2>
                    <p>All modern weaponts can appreciate our broad services akshay handge pharetra, eratd fermentum feugiat, gun are best velit mauris aks egestasut aliquam.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-area">
                    <form>
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-4 col-xs-12 feld">
                                    <input type="text" placeholder="Full Name *">
                                    <span><i class="fa fa-user"></i></span>
                                </div>
                                <div class="col-sm-4 col-xs-12 feld">
                                    <input type="text" placeholder="Email *">
                                    <span><i class="fa fa-envelope"></i></span>
                                </div>
                                <div class="col-sm-4 col-xs-12 feld">
                                    <input type="text" placeholder="Subject">
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="feld">
                                <textarea placeholder="Message"></textarea>
                                <span class="msg"><i class="fa fa-pencil-square-o"></i></span>
                            </div>
                        </fieldset>
                        <div class="btn-area text-center">
                            <a href="#" class="btn1"><span>Send now</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact area end here-->


@endsection