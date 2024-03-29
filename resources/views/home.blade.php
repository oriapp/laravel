{{-- @php
    Session::put('locale', 'he');
@endphp --}}

@extends('master')
@section('content')

<section class="slider-area">

  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-12 pd-0">
              <div class="item-content">
                  <div class="item-slider items1 bg-img">
        <div class="slider_section_overlay"></div>
                      <div class="container">
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="contents text-center">
                                      <h2 class="wow animated fadeInUp" data-wow-duration="1s">Idfgear.org</h2>
                                      <p class="mr-lu mr-ru wow animated fadeInDown" data-wow-duration="1.5s">Online tactical shop. </p>
                                      <div class="buttons wow animated fadeInUp" data-wow-duration="2s">
                                      <a href="{{url('shop')}}" class="btn1">buy now</a>
                                          <a href="{{url('shop')}}" class="btn2">read more</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item-slider items2 bg-img">
      <div class="slider_section_overlay"></div>
                      <div class="container">
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="contents text-center">
                                      <h2 class="wow animated fadeInDown" data-wow-duration="1s">Best Quality</h2>
                                      <p class="mr-lu mr-ru wow animated fadeInUp" data-wow-duration="1.5s">Our products are the you could get online for good prices! </p>
                                      <div class="buttons wow animated fadeInUp" data-wow-duration="2s">
                                          <a href="{{url('shop')}}" class="btn1">buy now</a>
                                          <a href="{{url('shop')}}" class="btn2">read more</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item-slider items3 bg-img">
      <div class="slider_section_overlay"></div>
                      <div class="container">
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="contents text-right">
                                      <h2 class="wow animated fadeInRight" data-wow-duration="1s">Huge selection</h2>
                                      <p class="mr-lu wow animated fadeInRight" data-wow-duration="1.5s">From flashlights to guns equipment we have everything you will need! </p>
                                      <div class="buttons wow animated fadeInUp" data-wow-duration="2s">
                                          <a href="{{url('shop')}}" class="btn1">buy now</a>
                                          <a href="{{url('shop')}}" class="btn2">read more</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item-slider items4 bg-img">
      <div class="slider_section_overlay"></div>
                      <div class="container">
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="contents">
                                      <h2 class="wow animated fadeInLeft" data-wow-duration="1s">Let's start </h2>
                                      <p class="wow animated fadeInLeft" data-wow-duration="1.5s">Click "Read More" and start shopping today! </p>
                                      <div class="buttons wow animated fadeInUp" data-wow-duration="2s">
                                          <a href="{{url('shop')}}" class="btn1">buy now</a>
                                          <a href="{{url('shop')}}" class="btn2">read more</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              @php
                  $fourItems = Product::fourItems();
              @endphp
              
              
              <div class="col-sm-12">
                  <div class="item-thumbnail">

                    @foreach ($fourItems as $item)
                    <a href="{{url('shop/'.$item->url . '/'. $item->purl)}}" class="col-sm-3" data-slide-index="0">
                        <div class="items">
                            <div class="dbox">
                                <div class="dleft">
                                    <figure><img src="{{asset('/images/'.$item->pimage)}}" alt=""></figure>
                                </div>
                                <div class="dright">
                                    <div class="content">
                                        <h3>{{mb_substr($item->ptitle, 0, 25)}}...</h3>
                                        <p>${{$item->price}}</p>
                                        {{-- {{dd($item->created_at)}} --}}
                                        <br>
                                        <h5>{{RealTime::parse($item->created_at)->locale(Session::get('locale'))->diffForHumans()}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    

                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--Slider area end here-->
<!--About area start here-->
<section class="about-area section bg-img jarallax">
  <div class="container">
      <div class="row">
          <div class="col-md-7 col-sm-12">
              <div class="section-heading2">
                  <h2>Who We Are</h2>
              </div>
              <div class="about-contents">
                  <p>With state-of-the-art indoor training facilities and full service custom shop on lion, we can accommodate most requests. All modern weapon enthussts can appreciate our broad services and real-world, experienced staff. With state-of-the-art indoor training facilities and full service.</p>
                  <blockquote>“This kiosk will revolutionize the purchasing process of silencers, SBRs, ine ns and in the class 3 realm.we can accommodate most rests.”</blockquote>
                  <p>All modern weaponts can appreciate our broad services and real-world, exper ienced taff.T fm nunc. Etiam pharetra, eratd fermentum feugiat, velit mauris aks egestasut aliquam akshay handge.</p>
                  <div class="buttons">
                      <a href="{{url('/about-us')}}" class="btn1">Read More</a>
                      <a href="{{url('/shop')}}" class="btn2">Our Shop</a>
                  </div>
              </div>
          </div>

</section>


  <!--About area end here-->
  <!--Banner area start here-->
  @if(Product::newItems(1) )
  @php
      $item = Product::newItems(1);
      $item = $item->first();
  @endphp
  <section class="banner-area section bg-img af jarallax">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="banner-con sm-t-center">
                    <h2>New {{$item->ptitle}}</h2>
                    <div class="price">
                        @if ($item->old_price != '0.00')
                        <del>${{$item->old_price}}</del>
                        @endif
                        <strong>${{$item->price}}</strong>
                    </div>
                    <a href="{{url('shop/'.$item->url . '/'. $item->purl)}}" class="btn1">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--Banner area end here-->

<!--Products area start here-->
<section class="products-area section bg-img jarallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-heading">
                    <h2>Our Products</h2>
                    {{-- <p>All modern weaponts can appreciate our broad services akshay handge pharetra, eratd fermentum feugiat, gun are best velit mauris aks egestasut aliquam.</p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 pro-ctg">
                <div class="col-md-3 col-sm-6 pd-0">
                    <div class="catagories-lists">
                        <div class="contents">
                            <figure><img src="{{asset('css/images/products/1.png')}}" alt="" /></figure>
                            <h3>Handguns</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 pd-0">
                    <div class="catagories-lists nd">
                        <div class="contents">
                            <figure><img src="{{asset('css/images/products/2.png')}}" alt="" /></figure>
                            <h3>Machine guns</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 pd-0">
                    <div class="catagories-lists">
                        <div class="contents">
                            <figure><img src="{{asset('css/images/products/3.png')}}" alt="" /></figure>
                            <h3>Silencers</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 pd-0">
                    <div class="catagories-lists nd">
                        <div class="contents">
                            <figure><img src="{{asset('css/images/products/4.png')}}" alt="" /></figure>
                            <h3>Gun Bullet</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 pd-0">
                <div class="pro-sliders">
                    @foreach (Product::fourItems(12) as $item)
                    <div class="col-sm-12">
                        <div class="products">
                            <figure><img src="{{asset('images/'.$item->pimage)}}" alt="" /></figure>
                            <div class="contents">
                                <h3>{{mb_strimwidth($item->ptitle, 0, 25, '...')}}</h3>
                                <span>${{$item->price}}</span>
                            <a href="{{url('shop/'.$item->url . '/'. $item->purl)}}" class="btn4">{{__('text.view')}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                   
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="load-btn text-center mr-t80">
                    <a href="#" class="btn1">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Products area end here-->
<!--Twitter area start here-->
<div class="twitter-posts section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 pd-0">
                <div class="twitt-sliders">
                    <div class="col-sm-12">
                        <div class="contents">
                            <p>New Item on Weapon Store. We are Happy too show my new item on our store Machine Gun
                                <br>#weapon #gun #webstrot</p>
                            <span>by AkshayHandge @HandgeAkshay - Jan 23, 2017</span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="contents">
                            <p>New Item on Weapon Store. We are Happy too show my new item on our store Machine Gun
                                <br>#weapon #gun #webstrot</p>
                            <span>by AkshayHandge @HandgeAkshay - Jan 23, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Twitter area end here-->
<!--Gallery area start here-->
<section class="gallery-area section2 bg-img jarallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-heading">
                    <h2>Photo Gallery</h2>
                    <p>Photos from the field</p>
                </div>
            </div>
            <div class="gallery col-sm-12 pd-0">
                <div class="col-md-4 col-sm-4 col-xs-12 pd-0">
                    <div class="col-sm-12 mr-b30">
                        <div class="gimg">
                            <figure>
                                <a href="{{asset('css/images/gallery/1.jpg')}}">
                                    <img src="{{asset('css/images/gallery/1.jpg')}}" alt="" />
                                    <div class="con-pop">
                                        <span><i class="fas fa-search"></i></span>
                                    </div>
                                </a>
                                <div class="content">
                                    <h3>Vests</h3>
                                    <p>Best tactical vests in the market!</p>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-12 mr-b30">
                        <div class="gimg">
                            <figure>
                                <a href="{{asset('css/images/gallery/4.jpg')}}">
                                    <img src="{{asset('css/images/gallery/4.jpg')}}" alt="" />
                                    <div class="con-pop">
                                        <span><i class="fas fa-search"></i></span>
                                    </div>
                                </a>
                                <div class="content">
                                    <h3>Israeli Defence Forch</h3>
                                    <p>Also the IDF uses our grate products!</p>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 pd-0">
                    <div class="col-sm-12 mr-b30">
                        <div class="gimg">
                            <figure>
                                <a href="{{asset('css/images/gallery/2.jpg')}}">
                                    <img src="{{asset('css/images/gallery/2.jpg')}}" alt="" />
                                    <div class="con-pop">
                                        <span><i class="fas fa-search"></i></span>
                                    </div>
                                </a>
                                <div class="content">
                                    <h3>comfortable</h3>
                                    <p>Quality and easy-to-use products.</p>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 pd-0">
                    <div class="col-sm-12 mr-b30">
                        <div class="gimg">
                            <figure>
                                <a href="{{asset('css/images/gallery/3.jpg')}}">
                                    <img src="{{asset('css/images/gallery/3.jpg')}}" alt="" />
                                    <div class="con-pop">
                                        <span><i class="fas fa-search"></i></span>
                                    </div>
                                </a>
                                <div class="content">
                                    <h3>Modern</h3>
                                    <p>Modern and professional equipment.</p>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-12 mr-b30">
                        <div class="gimg">
                            <figure>
                                <a href="{{asset('css/images/gallery/6.jpg')}}">
                                    <img src="{{asset('css/images/gallery/6.jpg')}}" alt="" />
                                    <div class="con-pop">
                                        <span><i class="fas fa-search"></i></span>
                                    </div>
                                </a>
                                <div class="content">
                                    <h3>Cheap</h3>
                                    <p>Favorable prices for every pocket in excellent quality!</p>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12 pd-0">
                    <div class="col-sm-12 mr-b30  lst_div_box_galery hidden-xs">
                        <div class="gimg">
                            <figure>
                                <a href="{{asset('css/images/gallery/5.jpg')}}">
                                    <img src="{{asset('css/images/gallery/5.jpg')}}" alt="" />
                                    <div class="con-pop">
                                        <span><i class="fas fa-search"></i></span>
                                    </div>
                                </a>
                                <div class="content">
                                    <h3>Bullets Roll</h3>
                                    <p>All modern weaponts can aiate our broad services akshay.</p>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Gallery area end here-->

<!--Banner area start here-->
<section class="banner-area3 section af bg-img jarallax">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12 col-md-offset-5">
                <div class="content">
                    <div class="con">
                        <h2>THREAT-MANAGEMENT <br>EXPERTS</h2>
                        <p>Our facilities in Tilden, TX offer great ranges and accommns for anyone looking to attend one of our hunts or training ses. Tilden has a 1000 yard range with steel every 100 yards as well a unknown distance steel throughout. For aerial opens we have vehicle interdiction.</p>
                        <a href="#" class="btn1">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner area end here-->
<!--Blog area start here-->
<section class="blog-area section bg-img jarallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-heading">
                    <h2>Latest News</h2>
                    {{-- <p>All modern weaponts can appreciate our broad services akshay handge pharetra, eratd fermentum feugiat, gun are best velit mauris aks egestasut aliquam.</p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 pd-0">
    <div class="news_left_wrapper">
      <div class="news_left_img_overlay"></div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="news_left_cont">
              <p><i>News, weapons ,training</i></p>
              <div class="heart_box">
                <a href="#"><i class="fa fa-heart"></i></a>
              </div>
              <h6><i class="fa fa-calendar-alt"></i>29-Jan-2017</h6>
              <h3>Weapon Services - 2017</h3>
              <h5><a href="#">Read More</a> &nbsp;<i class="fa fa-long-arrow-alt-right"></i></h5>
            </div>
          </div>	
        </div>	
      </div>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12 pd-0">
                <div class="ln-sliders">
                    <div class="col-sm-12">
                       <div class="main_news_right_box">
              <div class="news_right_box1_wrapper">
                <div class="news_right_box1">
                  <p>News,gun</p>
                  <h3>Weapon <br>Trainning 22</h3>
                  <h6><i class="fa fa-calendar-alt"></i>29-Jan-2017</h6>
                  <div class="news_border_bottom">
                  </div>
                </div>
              </div>
              <div class="news_botton_cont">
                <p>Proin ravida nibh vel velit auctor aliquet. Aenean sotn.</p>
                <h5><a href="#">Read More</a> &nbsp;<i class="fa fa-long-arrow-alt-right"></i></h5>
              </div>
            </div>	
                    </div>
                    <div class="col-sm-12">
                       <div class="main_news_right_box">
              <div class="news_right_box1_wrapper">
                <div class="news_right_box1">
                  <p>News,gun</p>
                  <h3>Weapon <br>Trainning 22</h3>
                  <h6><i class="fa fa-calendar-alt"></i>29-Jan-2017</h6>
                  <div class="news_border_bottom">
                  </div>
                </div>
              </div>
              <div class="news_botton_cont">
                <p>Proin ravida nibh vel velit auctor aliquet. Aenean sotn.</p>
                <h5><a href="#">Read More</a> &nbsp;<i class="fa fa-long-arrow-alt-right"></i></h5>
              </div>
            </div>	
                    </div>
                    <div class="col-sm-12">
                       <div class="main_news_right_box">
              <div class="news_right_box1_wrapper">
                <div class="news_right_box1">
                  <p>News,gun</p>
                  <h3>Weapon <br>Trainning 22</h3>
                  <h6><i class="fa fa-calendar-alt"></i>29-Jan-2017</h6>
                  <div class="news_border_bottom">
                  </div>
                </div>
              </div>
              <div class="news_botton_cont">
                <p>Proin ravida nibh vel velit auctor aliquet. Aenean sotn.</p>
                <h5><a href="#">Read More</a> &nbsp;<i class="fa fa-long-arrow-alt-right"></i></h5>
              </div>
            </div>	
                    </div>

                    <div class="col-sm-12">
                        <div class="main_news_right_box">
              <div class="news_right_box1_wrapper">
                <div class="news_right_box1">
                  <p>News,gun</p>
                  <h3>Weapon <br>Trainning 22</h3>
                  <h6><i class="fa fa-calendar-alt"></i>29-Jan-2017</h6>
                  <div class="news_border_bottom">
                  </div>
                </div>
              </div>
              <div class="news_botton_cont">
                <p>Proin ravida nibh vel velit auctor aliquet. Aenean sotn.</p>
                <h5><a href="#">Read More</a> &nbsp;<i class="fa fa-long-arrow-alt-right"></i></h5>
              </div>
            </div>	
                    </div>
                    <div class="col-sm-12">
                       <div class="main_news_right_box">
              <div class="news_right_box1_wrapper">
                <div class="news_right_box1">
                  <p>News,gun</p>
                  <h3>Weapon <br>Trainning 22</h3>
                  <h6><i class="fa fa-calendar-alt"></i>29-Jan-2017</h6>
                  <div class="news_border_bottom">
                  </div>
                </div>
              </div>
              <div class="news_botton_cont">
                <p>Proin ravida nibh vel velit auctor aliquet. Aenean sotn.</p>
                <h5><a href="#">Read More</a> &nbsp;<i class="fa fa-long-arrow-alt-right"></i></h5>
              </div>
            </div>	
                    </div>
                    <div class="col-sm-12">
                       <div class="main_news_right_box">
              <div class="news_right_box1_wrapper">
                <div class="news_right_box1">
                  <p>News,gun</p>
                  <h3>Weapon <br>Trainning 22</h3>
                  <h6><i class="fa fa-calendar-alt"></i>29-Jan-2017</h6>
                  <div class="news_border_bottom">
                  </div>
                </div>
              </div>
              <div class="news_botton_cont">
                <p>Proin ravida nibh vel velit auctor aliquet. Aenean sotn.</p>
                <h5><a href="#">Read More</a> &nbsp;<i class="fa fa-long-arrow-alt-right"></i></h5>
              </div>
            </div>	
                    </div>
                    <div class="col-sm-12">
                       <div class="main_news_right_box">
              <div class="news_right_box1_wrapper">
                <div class="news_right_box1">
                  <p>News,gun</p>
                  <h3>Weapon <br>Trainning 22</h3>
                  <h6><i class="fa fa-calendar-alt"></i>29-Jan-2017</h6>
                  <div class="news_border_bottom">
                  </div>
                </div>
              </div>
              <div class="news_botton_cont">
                <p>Proin ravida nibh vel velit auctor aliquet. Aenean sotn.</p>
                <h5><a href="#">Read More</a> &nbsp;<i class="fa fa-long-arrow-alt-right"></i></h5>
              </div>
            </div>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog area end here-->
<hr>
<!--Partner area start here-->
<section class="partner-area section bg-img jarallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-heading">
                    <h2>Our Trusted Partners</h2>
                    {{-- <p>All modern weaponts can appreciate our broad services akshay handge pharetra, eratd fermentum feugiat, gun are best velit mauris aks egestasut aliquam.</p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="partner-list">
                    <ul>
                        <li>
                            <a href="{{url('search/silynx')}}"><img src="css/images/partners/1.png" alt="" /></a>
                        </li>
                        <li>
                            <a href="{{url('search/511')}}"><img src="css/images/partners/2.png" alt="" /></a>
                        </li>
                        <li>
                            <a href="{{url('search/masada')}}"><img src="css/images/partners/3.png" alt="" /></a>
                        </li>
                        <li>
                            <a href="{{url('search/pi9')}}"><img src="css/images/partners/4.png" alt="" /></a>
                        </li>
                        <li>
                            <a href="{{url('search/fab')}}"><img src="css/images/partners/5.png" alt="" /></a>
                        </li>
                        <li>
                            <a href="{{url('search/crispi')}}"><img src="css/images/partners/6.png" alt="" /></a>
                        </li>
                        <li>
                            <a href="{{url('search/keela')}}"><img src="css/images/partners/7.png" alt="" /></a>
                        </li>
                        <li>
                            <a href="{{url('search/lalo')}}"><img src="css/images/partners/8.png" alt="" /></a>
                        </li>
                        <li>
                            <a href="{{url('search/caa')}}"><img src="css/images/partners/9.png" alt="" /></a>
                        </li>
                        <li>
                            <a href="{{url('search/olight')}}"><img src="css/images/partners/10.png" alt="" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Partner area End here-->
<!--Subscribe area start here-->
<section class="subscribe-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="subscribe">
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