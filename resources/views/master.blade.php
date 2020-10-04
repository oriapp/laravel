@php
    use App\Categorie;
    use App\Product;
    $caregories = Categorie::all();
@endphp

<!doctype html>
<html lang="he">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/allplugins.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <title>{{$page_title ?? ''}}</title>
  <script>let BASE_URL = "{{ url('') }}/";</script>

@if (Cart::getTotal())
<style>
  header .main-header .cart-head button:after {
visibility: visible !important;
content: "{{Cart::getTotal()}}";
}
</style> 
@endif

  <script src="{{'/js/vendor/modernizr-2.8.3.min.js'}}"></script>

  </head>

  <body oncontextmenu="return true;">

    @include('notify::messages')
        @notifyJs
        @notifyCss

    {{-- <div id="preloader">
    <div id="status"><img src="{{asset('css/images/bx_loader.gif')}}" id="preloader_image" alt="loader">
      </div>
  </div> --}}

  <!--Preloader area End-->

  <!--Header area start here-->
  <header>

      <div class="container-fluid">
          <div class="row">
              <div class="col-md-2 col-sm-2 col-xs-12">
                  <div class="logo-area">
                      <a href="{{url('')}}"><img src="{{asset('css/images/lol.png')}}" alt="" /></a>
                  </div>
              </div>
              <div class="col-md-10 col-sm-10 hidden-xs">
                  <div class="main-header">
                      <div class="main-menus">
                          <nav>
                              <ul class="mamnu">
                                  <li><a href="{{url('')}}">Home</a></li>
                                  @if(!empty($menu))
                                  @foreach($menu as $menu_item)
                                  <li><a href="{{url($menu_item->url)}}">{{$menu_item->link}}</a></li>
                                  @endforeach
                                  <li>
                                  @endif
                                  <li><a href="{{url('/shop')}}">Shop</a></li>
                                  </li>

                                  <li><a href="contact.html">Contact</a></li>
                              </ul>
                          </nav>
                      </div>
                      {{-- <div class="serach-header">
                          <button class="searchd"><i class="fas fa-search"></i></button>
                          <div class="searchbox">
                              <button class="close">×</button>
                              <form>
                                  <input type="search" placeholder="Search …">
                                  <button type="submit"><i class="fas fa-search"></i></button>
                              </form>
                          </div>
                      </div> --}}
                      <div class="cart-head">
                          <button><i class="fas fa-shopping-cart"></i></button>
                          <div class="nav-shop-cart">
                              <div class="widget_shopping_cart_content">
                                  <ul class="product_list_widget ">
                                      <li class="mini_cart_item">

                                          <a href="#">
                                              <img src="assets/images/products/5.jpg" alt="" />
                                              <p class="product-name">Shop Item 01</p>
                                          </a>

                                          <p class="quantity">1 x
                                              <strong class="Price-amount">$200.00</strong>
                                          </p>

                                          <a href="#" class="remove" title="Remove this item">x</a>
                                      </li>
                                      <li class="mini_cart_item">

                                          <a href="#">
                                              <img src="assets/images/products/6.jpg" alt="" />
                                              <p class="product-name">Shop Item 01</p>
                                          </a>

                                          <p class="quantity">1 x
                                              <strong class="Price-amount">$200.00</strong>
                                          </p>

                                          <a href="#" class="remove" title="Remove this item">x</a>
                                      </li>
                                      <li class="mini_cart_item">

                                          <a href="#">
                                              <img src="assets/images/products/7.jpg" alt="" />
                                              <p class="product-name">Shop Item 01</p>
                                          </a>

                                          <p class="quantity">1 x
                                              <strong class="Price-amount">$200.00</strong>
                                          </p>

                                          <a href="#" class="remove" title="Remove this item">x</a>
                                      </li>
                                  </ul>
                                  <!-- /.product_list_widget -->

                                  <p class="total">
                                      <strong>Subtotal:</strong>
                                      <span class="amount">${{Cart::getTotal()}}
                                              </span>
                                  </p>

                                  <p class="buttons">
                                      <a href="{{url('shop/cart')}}" class="btn1">View Cart</a>
                                      <a href="" class="btn2">Checkout</a>
                                  </p>
                              </div>
                          </div>
                      </div>
                      @if(!Session::has('user_id'))

                      <div class="sing-in-btn">
                        <a href="{{url('user/signin')}}" class="btn1">Sign in</a>
                    </div>

                    <div class="sing-in-btn">
                      <a href="{{url('user/signup')}}" class="btn1">Sign up</a>
                  </div>

                  @else

                  @if(Session::get('is_admin'))

                  <div class="sing-in-btn">
                    <a href="{{url('cms/dashboard')}}" class="btn1"> {{__('text.admin_dashboard')}} </a>
                    </div>
                  @endif

                  <div class="sing-in-btn">
                    <a href="#" class="btn1"> {{Session::get('user_name')}} </a>
                    </div>


                    <div class="sing-in-btn">
                      <a href="{{url('user/logout')}}" class="btn1"> {{__('text.logout')}} </a>
                      </div>

                      @endif
                  </div>
              </div>
          </div>
      </div>

      <!--Responsive Menu area-->
      <div class="mobilemenu">
          <div class="mobile-menu visible-xs">
              <nav>
                  <ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="services.html">services</a></li>
                      <li>
                          <a href="javascript:void(0)">pages</a>
                          <ul>
                              <li><a href="about.html">about</a></li>
                              <li><a href="shop.html">shop</a></li>
                              <li><a href="product-single.html">shop single</a></li>
                              <li><a href="event.html">event</a></li>
                              <li><a href="event-single.html">event-single</a></li>
                              <li><a href="gallery.html">gallery</a></li>
                              <li><a href="blog.html">blog</a></li>
                              <li><a href="blog-single.html">blog single</a></li>
                              <li><a href="contact.html">contact</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href="#">shop</a>
                          <ul>
                              <li><a href="shop.html">shop page</a></li>
                              <li><a href="product-single.html">shop single</a></li>

                          </ul>
                      </li>
                      <li>
                          <a href="#">blog</a>
                          <ul>
                              <li><a href="blog.html">blog page</a></li>
                              <li><a href="blog-single.html">blog single</a></li>
                          </ul>
                      </li>
                      <li><a href="contact.html">Contact</a></li>
                  </ul>
              </nav>
          </div>
      </div>
      <!--Responsive Menu area End-->
  </header>
  <!--Header area end here-->
  <!--Slider area start here-->


  @yield('content')
  
  <!--Footer area start here-->
  <footer class="jarallax">
      <div class="footer-top section">
          <div class="container">
              <div class="row">
                  <div class="col-md-4 col-sm-6">
                      <div class="foo-about">
                          <figure><img src="assets/images/logo/logo.png" alt="" /></figure>
                          <div class="contents">
                              <p>All modern weaponts can apprecie our broad services akshay handge phatum feugiat gun. This is Photo shop's version of Lorem.</p>
                              {{-- <a href="#" class="btn3">read more <i class="fas fa-arrow-right"></i></a> --}}
                          </div>
                          <ul class="foo-social">
                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                      {{-- <h2>latest News</h2>
                      <div class="foo-news">
                          <div class="newslists">
                              <div class="dbox">
                                  <div class="dleft">
                                      <figure><img src="assets/images/blog/sm-1.jpg" alt="" /></figure>
                                  </div>
                                  <div class="dright">
                                      <div class="content">
                                          <h4><a href="#">Weapons 2020</a></h4>
                                          <p>Weaponts can apprecie
                                              <br> our broad services.</p>
                                          <span><i class="fas fa-calendar"></i> 12 Jan 2020</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="newslists">
                              <div class="dbox">
                                  <div class="dleft">
                                      <figure><img src="assets/images/blog/sm-2.jpg" alt="" /></figure>
                                  </div>
                                  <div class="dright">
                                      <div class="content">
                                          <h4><a href="#">Weapons 2020</a></h4>
                                          <p>Weaponts can apprecie
                                              <br> our broad services.</p>
                                          <span><i class="fas fa-calendar"></i> 12 Jan 2020</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div> --}}
                  </div>
                  <div class="col-md-4 col-sm-6">
                    @if(Product::newItems() )
                      <h2>{{__('text.new_products')}}</h2>
                      <div class="products-foo">
                          <ul>
                            @foreach(Product::newItems() as $item)
                              <li>
                                  <a href="{{url('shop/'.$item->url . '/'. $item->purl)}}"><img src="{{asset('images/' . $item->pimage)}}" alt="" /></a>
                              </li>
                              @endforeach
                          </ul>
                          <p>For More Products and Gun Click Here!</p>
                          <a href="{{url('/shop')}}" class="btn1">Our Shop</a>
                      </div>
                      @endif
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-sm-12">
                      <div class="copyright sm-t-center">
                          <p>Copyright © 2020 <a href="#"><span>Weapon</span> </a>Store. Design by <a href="#"><span>Webstrot</span></a></p>
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                      <div class="foo-links sm-t-center">
                          <ul>
                              <li><a href="#">Privacy Policy</a></li>
                              <li><a href="#">Terms & Conditions</a></li>
                              <li><a href="#">Copyright Policy</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!--Footer area end here-->

  <!-- All JavaScript Here -->

  <!-- jQuery latest version -->
  <script src="{{asset('js/vendor/jquery-3.2.1.min.js')}}"></script>
  <!-- tether JavaScript -->
  <script src="{{asset('js/tether.min.js')}}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- Owl.carousel JavaScript -->
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <!-- Bxslider JavaScript -->
  <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
  <!-- isotope JavaScript -->
  <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
  <!-- Magnific Popup JavaScript -->
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <!-- meanmenu JavaScript -->
  <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
  <!-- jarallax JavaScript -->
  <script src="{{asset('js/jarallax.min.js')}}"></script>
  <!-- jQuery-ui JavaScript -->
  <script src="{{asset('js/jquery-ui.min.js')}}"></script>
  <!-- Progressbar Animation JavaScript -->
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
  <!-- masonry JavaScript -->
  <script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
  <!-- bootstrap-touchspin JavaScript -->
  <script src="{{asset('js/jquery.bootstrap-touchspin.min.js')}}"></script>
  <!-- downCount JavaScript -->
  <script src="{{asset('js/jquery.downCount.js')}}"></script>
  <!-- wow JavaScript -->
  <script src="{{asset('js/wow.min.js')}}"></script>
  <!-- slick JavaScript -->
  <script src="{{asset('js/slick.min.js')}}"></script>
  <!-- Plugins JavaScript -->
  <script src="{{asset('js/plugins.js')}}"></script>
  <!-- Init JavaScript -->
  <script src="{{asset('js/main.js')}}"></script>

  <script>
      function initMap() {
          var uluru = {
              lat: -36.742775,
              lng: 174.731559
          };
          var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
              scrollwheel: false,
              center: uluru
          });
          var marker = new google.maps.Marker({
              position: uluru,
              map: map
          });
      }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&callback=initMap">
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if(Session::has('sm'))
<script>
  toastr.options.positionClass = 'toast-bottom-center'
toastr.success("{{Session::get('sm')}}");
</script>
@endif

@if(Session::has('em'))
<script>
  toastr.options.positionClass = 'toast-bottom-center'
toastr.error("{{Session::get('em')}}");
</script>
@endif


  </body>
</html>