@php
    use App\Product;
@endphp

@extends('master')
@section('content')
<div class="container">
@component('components.page_hader')
    {{-- @slot('title') {{__('text.product_title', ['product_title' => $product->ptitle])}} @endslot --}}
    @slot('title') {{null}} @endslot
    @slot('description') {{null}}  <!-- {{$product->brand}} -->@endslot
    @endcomponent

<link rel="stylesheet" href="{{url('css/product_page.css')}}">



    <section class="product-details-area pt-70 pb-40">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-12">
            <div class="products-details-image">
              <ul class="products-details-image-slides owl-theme owl-carousel" data-slider-id="1">
                <li><img src="{{asset('images/'.$product->pimage)}}" alt="image"></li>
                {{-- <li><img src="assets/img/products/products-img2.jpg" alt="image"></li>
                <li><img src="assets/img/products/products-img3.jpg" alt="image"></li>
                <li><img src="assets/img/products/products-img4.jpg" alt="image"></li> --}}
              </ul>
  
              <!-- Carousel Thumbs -->
              <div class="owl-thumbs products-details-image-slides-owl-thumbs" data-slider-id="1">
                <div class="owl-thumb-item">
                  <img src="{{asset('images/'.$product->pimage)}}" alt="image">
                </div>
  
                {{-- <div class="owl-thumb-item">
                  <img src="assets/img/products/products-img2.jpg" alt="image">
                </div>
  
                <div class="owl-thumb-item">
                  <img src="assets/img/products/products-img3.jpg" alt="image">
                </div>
  
                <div class="owl-thumb-item">
                  <img src="assets/img/products/products-img4.jpg" alt="image">
                </div> --}}
              </div>
            </div>
          </div>
  
          <div class="col-lg-7 col-md-12">
            <div class="products-details-desc">
              <h3>{{$product->ptitle}}</h3>
  
              <div class="price">
                <span class="new-price">${{$product->price}}</span>
                @if ($product->old_price != "0.00")
                <span class="old-price">${{$product->old_price}}</span>
                @endif
              </div>
              <br>
  
              {{-- <div class="products-review">
                <div class="rating">
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                </div>
                <a href="#" class="rating-count">3 reviews</a>
              </div> --}}
  
              <ul class="products-info">
                <li><span>Vendor:</span> <a target="_blank" href="{{url("search/$product->brand")}}">{{$product->brand}}</a></li>
                @php
                    ($product->amount || $product->amount > 0) ? $product->amount = "In stock $product->amount" : $product->amount = "Out of stock";
                @endphp
                <li><span>Availability:</span> <a>({{$product->amount}})</a></li>
                <li><span>Products Type:</span> <a href="#">Mask</a></li>
              </ul>
  
  
  
            {{-- <div class="product-options mt-4">
              <div class="form-group">
                <label for="" class="font-weight-bold">MCK MODEL <span class="text-danger">*</span> </label>
                <select class="form-control w-75" name="" id="">
                  <option selected>Choose an option</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>
              <div class="form-group">
                <label for="" class="font-weight-bold">STABILIZER <span class="text-danger">*</span> </label>
                <select class="form-control w-75" name="" id="">
                  <option selected>Choose an option</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div> 

            </div> --}}

            @php
            if($product->colors == "N;"){
              $product->colors = null;
            };
        @endphp
        @if ($product->colors != null || $product->colors == '"N;"')
        @php
            $product->colors = unserialize($product->colors);
        @endphp
        <div class="font-weight-bold">
        <div class="select-colors">
          <h5 class="colors">colors:
            <select class="form-control w-75" name="colors" id="colors">
              <label for="colors">colors</label>
              @if ($product->colors)
              @foreach (explode(',', $product->colors) as $colors)
                <option>{{$colors}}</option>
              @endforeach

              @endif
            </select>
          </h5>
          </div>
        </div>
        @endif



        @php
        if($product->size == "N;"){
          $product->size = null;
        };
    @endphp
    @if ($product->size != null || $product->size == '"N;"')
    @php
        $product->size = unserialize($product->size);
    @endphp
    <div class="font-weight-bold">
    <div class="select-size">
      <h5 class="sizes">sizes:
        <select class="form-control w-75" name="size" id="size">
          <label for="size">Size</label>
          @if ($product->size)
          @foreach (explode(',', $product->size) as $size)
            <option>{{$size}}</option>
          @endforeach

          @endif
        </select>
      </h5>
      </div>
    </div>
    @endif
  
              {{-- <div class="products-info-btn">
                <a href="customer-service.html"><i class='bx bxs-truck'></i> Shipping</a>
                <a href="contact.html"><i class='bx bx-envelope'></i> Ask about this products</a>
              </div> --}}
  
              <div class="products-add-to-cart">
                <div class="input-counter">
                  <span class="minus-btn"><i class='bx bx-minus'></i></span>
                  <input disabled="disabled" type="text" value="1" min="1">
                  <span class="plus-btn"><i class='bx bx-plus'></i></span>
                </div>
  
                <button data-pid="{{$product->id}}" type="submit" class="default-btn add-to-cart-btn"><i class="flaticon-trolley"></i> {{__('text.add_to_cart')}}</button>
              </div>
  
              {{-- <div class="wishlist-btn">
                <a href="#"><i class='bx bx-heart'></i> Add to Wishlist</a>
              </div>
  
              <div class="buy-checkbox-btn">
                <div class="item">
                  <input class="inp-cbx" id="cbx" type="checkbox">
                  <label class="cbx" for="cbx">
                    <span>
                      <svg width="12px" height="10px" viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                      </svg>
                    </span>
                    <span>I agree with the terms and conditions</span>
                  </label>
                </div> --}}
  
                {{-- <div class="item">
                  <a href="#" class="default-btn">Buy it now!</a>
                </div> --}}
              </div>
            </div>
          </div>
  
          <div class="col-lg-12 col-md-12">
            <div class="products-details-tabs">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description"
                    role="tab" aria-controls="description">Description</a></li>
                {{-- <li class="nav-item"><a class="nav-link" id="shipping-tab" data-toggle="tab" href="#shipping" role="tab"
                    aria-controls="shipping">Shipping</a></li>
                <li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                    aria-controls="reviews">Reviews (2)</a></li> --}}
              </ul>
  
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel">
                <p>{!! $product->particle !!}</p>
                </div>
  
                <div class="tab-pane fade" id="shipping" role="tabpanel">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td>Shipping</td>
                          <td>This item Ship to USA</td>
                        </tr>
  
                        <tr>
                          <td>Delivery</td>
                          <td>
                            Estimated between Wednesday 07/31/2020 and Monday 08/05/2020 <br>
                            Will usually ship within 1 bussiness day.
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
  
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                  <div class="products-reviews">
                    <h3>Products Rating</h3>
  
                    <div class="rating">
                      <span class="bx bxs-star checked"></span>
                      <span class="bx bxs-star checked"></span>
                      <span class="bx bxs-star checked"></span>
                      <span class="bx bxs-star checked"></span>
                      <span class="bx bxs-star"></span>
                    </div>
  
                    <div class="rating-count">
                      <span>4.1 average based on 4 reviews.</span>
                    </div>
  
                    <div class="row">
                      <div class="side">
                        <div>5 star</div>
                      </div>
  
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-5"></div>
                        </div>
                      </div>
  
                      <div class="side right">
                        <div>02</div>
                      </div>
  
                      <div class="side">
                        <div>4 star</div>
                      </div>
  
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-4"></div>
                        </div>
                      </div>
  
                      <div class="side right">
                        <div>03</div>
                      </div>
  
                      <div class="side">
                        <div>3 star</div>
                      </div>
  
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-3"></div>
                        </div>
                      </div>
  
                      <div class="side right">
                        <div>04</div>
                      </div>
  
                      <div class="side">
                        <div>2 star</div>
                      </div>
  
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-2"></div>
                        </div>
                      </div>
  
                      <div class="side right">
                        <div>05</div>
                      </div>
  
                      <div class="side">
                        <div>1 star</div>
                      </div>
  
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-1"></div>
                        </div>
                      </div>
  
                      <div class="side right">
                        <div>00</div>
                      </div>
                    </div>
                  </div>
  
                  <div class="products-review-comments">
                    <h3>3 Reviews</h3>
  
                    <div class="user-review">
                      <img src="assets/img/user1.jpg" alt="image">
  
                      <div class="review-rating">
                        <div class="review-stars">
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star checked'></i>
                        </div>
  
                        <span class="d-inline-block">James Anderson</span>
                      </div>
  
                      <span class="d-block sub-comment">Excellent</span>
                      <p>Very well built theme, couldn't be happier with it. Can't wait for future updates to see what else they add
                        in.</p>
                    </div>
  
                    <div class="user-review">
                      <img src="assets/img/user2.jpg" alt="image">
  
                      <div class="review-rating">
                        <div class="review-stars">
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                        </div>
  
                        <span class="d-inline-block">Sarah Taylor</span>
                      </div>
                      <span class="d-block sub-comment">Video Quality!</span>
                      <p>Was really easy to implement and they quickly answer my additional questions!</p>
                    </div>
  
                    <div class="user-review">
                      <img src="assets/img/user3.jpg" alt="image">
  
                      <div class="review-rating">
                        <div class="review-stars">
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star checked'></i>
                        </div>
                        <span class="d-inline-block">David Warner</span>
                      </div>
                      <span class="d-block sub-comment">Perfect Coding!</span>
                      <p>Stunning design, very dedicated crew who welcome new ideas suggested by customers, nice support.</p>
                    </div>
  
                    <div class="user-review">
                      <img src="assets/img/user4.jpg" alt="image">
  
                      <div class="review-rating">
                        <div class="review-stars">
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star checked'></i>
                          <i class='bx bxs-star'></i>
                        </div>
                        <span class="d-inline-block">King Kong</span>
                      </div>
                      <span class="d-block sub-comment">Perfect Video!</span>
                      <p>Stunning design, very dedicated crew who welcome new ideas suggested by customers, nice support.</p>
                    </div>
                  </div>
  
                  <div class="review-form-wrapper">
                    <h3>Add a review</h3>
                    <p class="comment-notes">Your email address will not be published. Required fields are marked <span>*</span></p>
  
                    <form>
                      <div class="row">
                        <div class="col-lg-12 col-md-12">
                          <div class="rating">
                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                          </div>
                        </div>
  
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name *">
                          </div>
                        </div>
  
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email *">
                          </div>
                        </div>
  
                        <div class="col-lg-12 col-md-12">
                          <div class="form-group">
                            <textarea placeholder="Your review" class="form-control" cols="30" rows="6"></textarea>
                          </div>
                        </div>
  
                        <div class="col-lg-12 col-md-12">
                          <p class="comment-form-cookies-consent">
                            <input type="checkbox" id="test1">
                            <label for="test1">Save my name, email, and website in this browser for the next time I comment.</label>
                          </p>
                        </div>
  
                        <div class="col-lg-12 col-md-12">
                          <button type="submit" class="default-btn">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="related-products">
        <div class="container">
          <div class="section-title">
            <h2>Related Products</h2>
          </div>
  
  
            <div class="single-product">
              <div class="img-container">
                <img src="img/1.jpg" class="img-fluid p-img" alt="">
                <div class="sale">sale</div>
                <div class="view-btn">
                  <a href="#" class="btn btn-view  btn-sm btn-block"> View </a>
                </div><!-- /.view-btn -->
              </div><!-- /.img-container -->
              <div class="product-details">
                <div class="category">
                  <a href="#"> Category </a>
                </div><!-- /.category -->
                <div class="product-title">
                  <h3><a href="#"> Lorem ipsum dolor </a></h3>
                </div><!-- /.product-title -->
                <div class="positioned-bottom">
                  <div class="product-ratings">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                  </div><!-- /.product-ratings -->
                  <div class="price mb-2 mt-1">
                    <span class="old-price mr-1">$165.00</span>
                    <span class="new-price">$159.00</span>
                  </div> <!-- .price -->
                </div><!-- /.positioned-bottom -->
              </div><!-- /.product-details -->
            </div><!-- /.single-product -->
  
          </div>
        </div>
      </div>
    </section>
    <!-- End Product Details Area -->
  
    <!-- Start Facility Area -->
    <section class="facility-area bg-f7f8fa pt-70 pb-40">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-md-3 col-6">
            <div class="single-facility-box">
              <div class="icon">
                <i class="flaticon-free-shipping"></i>
              </div>
              <h3>Free Shipping</h3>
              <p>Free shipping world wide</p>
            </div>
          </div>
  
          <div class="col-lg-3 col-sm-6 col-md-3 col-6">
            <div class="single-facility-box">
              <div class="icon">
                <i class="flaticon-headset"></i>
              </div>
              <h3>Support 24/7</h3>
              <p>Contact us 24 hours a day</p>
            </div>
          </div>
  
          <div class="col-lg-3 col-sm-6 col-md-3 col-6">
            <div class="single-facility-box">
              <div class="icon">
                <i class="flaticon-secure-payment"></i>
              </div>
              <h3>Secure Payments</h3>
              <p>100% payment protection</p>
            </div>
          </div>
  
          <div class="col-lg-3 col-sm-6 col-md-3 col-6">
            <div class="single-facility-box">
              <div class="icon">
                <i class="flaticon-return-box"></i>
              </div>
              <h3>Easy Return</h3>
              <p>Simple returns policy</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Facility Area -->


</div>


@endsection