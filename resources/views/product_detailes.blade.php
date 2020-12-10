@extends('master')
@section('content')


 <!--Breadcumb area start here-->
 <section class="breadcumb-area jarallax bg-img af">
  <div class="breadcumb">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="content">
                      <h2>PRODUCT details</h2>
                      <ul>
                          <li><a href="{{url('')}}">Home</a></li>
                          <li><a href="{{url("shop/$categoie->url")}}">{{$categoie->title}}</a></li>
                          <li><a href="javascript:void(0)">{{$product->in_short}}</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--Breadcumb area end here-->
<!--Product Details area start here-->
<section class="product-details section">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="products-photo">
                  <!-- Tab panes -->
                  <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="img1">
                          <img src="{{asset('images/'.$product->pimage)}}" alt="" />
                      </div>

                  </div>

              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="single-product-content">
                  <h2>{{$product->ptitle}}</h2>

                  <div class="con">
                    {!! $product->in_short !!}
                    <br><br>
                      <ul>
                          <li><i class="fa fa-angle-double-right"></i>Hight Quality</li>
                          <li><i class="fa fa-angle-double-right"></i>Fast Shipping Around The World</li>
                          <li><i class="fa fa-angle-double-right"></i>24/7 whatsapp Support</li>
                      </ul>
                  </div>
                  <div class="select-pro">
                      <div class="input-group ">
                          <input disabled="disabled" class="vertical-spin" type="text" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default" value="1" name="vertical-spin">
                      </div>
                  </div>
                  <div class="price">
                      <strong>${{$product->price}}</strong>

                      @if ($product->old_price != '0.00')
                      <del>${{$product->old_price}}</del>
                      <span>({{number_format(($product->price - $product->old_price))}}$ OFF)</span>
                      {{-- <span>({{number_format(($product->price / $product->old_price) * 100, 2, '.', '')}}$ OFF)</span> --}}
                      @endif

                  </div>

                  <div class="buttons">
                    <button data-pid="{{$product->id}}" type="submit" class="btn1 add-to-cart-btn"><i class="flaticon-trolley"></i> {{__('text.add_to_cart')}}</button>

                      <a href="#" class="btn4">Buy now!</a>
                      @if (Session::get('user_id'))
                      <a title="add to wishlist" data-pid="{{$product->id}}" data-uid="{{Session::get('user_id')}}" class="wishlist heart"><i class="fa fa-heart"></i></a>
                      @endif
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row section5">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="pro-details">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#con1" role="tab" data-toggle="tab">Description</a></li>

                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="img1">
                          <div class="con">
                              <figure><img src="assets/images/products/1.jpg" alt="" /></figure>
                              {!! $product->particle !!}
                          </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="con2">
                          <div class="con">
                              <figure><img src="assets/images/products/2.jpg" alt="" /></figure>
                              <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velittor aliquet. Aenean sollicitudin, lorem quis endum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
                              <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat stoamet. This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                              <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velittor aliquet. Aenean sollicitudin, lorem quis endum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
                              <ul>
                                  <li><i class="fas fa-long-arrow-alt-right"></i>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. lorem quis bibendum auctor. </li>
                                  <li><i class="fas fa-long-arrow-alt-right"></i>Nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</li>
                              </ul>
                          </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="con3">
                          <div class="con">
                              <figure><img src="assets/images/products/3.jpg" alt="" /></figure>
                              <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velittor aliquet. Aenean sollicitudin, lorem quis endum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
                              <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat stoamet. This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                              <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velittor aliquet. Aenean sollicitudin, lorem quis endum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
                              <ul>
                                  <li><i class="fas fa-long-arrow-alt-right"></i>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. lorem quis bibendum auctor. </li>
                                  <li><i class="fas fa-long-arrow-alt-right"></i>Nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</li>
                              </ul>
                          </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="con4">
                          <div class="con">
                              <figure><img src="assets/images/products/4.jpg" alt="" /></figure>
                              <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velittor aliquet. Aenean sollicitudin, lorem quis endum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
                              <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat stoamet. This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                              <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velittor aliquet. Aenean sollicitudin, lorem quis endum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
                              <ul>
                                  <li><i class="fas fa-long-arrow-alt-right"></i>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. lorem quis bibendum auctor. </li>
                                  <li><i class="fas fa-long-arrow-alt-right"></i>Nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--Product Details area End here-->
<!--Products area start here-->
<section class="products-area section4 bg-img jarallax">
  <div class="container">
      <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="section-heading">
                  <h2>Similar Products</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 col-sm-12 pd-0">
              <div class="pro-sliders">
                  @php
                      $similar = Product::similarProducts($product->ptitle, $product->particle, $product->brand, $product->producer)
                  @endphp
                  @foreach ($similar as $item)
                  <div class="col-sm-12 h-400 w-260">
                      <div class="products">
                          <figure><img src="{{asset('images/'.$item->pimage)}}" alt="" /></figure>
                          <div class="contents">
                              <h3>{{mb_strimwidth($item->ptitle, 0, 30, '...')}}</h3>
                              <span>${{$item->price}}</span>
                              {{-- {{dd($item)}} --}}
                          <a href="{{url("shop/$item->url/$item->purl")}}" class="btn4">{{__('text.view')}}</a>
                          </div>
                      </div>
                  </div>
                  @endforeach

              </div>
          </div>
      </div>
  </div>
</section>
<!--Products area end here-->
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