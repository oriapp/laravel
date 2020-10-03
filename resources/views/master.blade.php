@php
    use App\Categorie;
    $caregories = Categorie::all();
@endphp

<!doctype html>
<html lang="he">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <title>{{$page_title ?? ''}}</title>
  <script>let BASE_URL = "{{ url('') }}/";</script>

  {{-- React Include --}}
  <!-- React | CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
  <script src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>

  {{-- React Include --}}

  </head>


  {{-- <script>
    document.onkeydown = function(e) {
            if ((e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {//Alt+c, Alt+v will also be disabled sadly. 
            }
            return false;
    };
    </script> --}}
    

  <body oncontextmenu="return true;">
    @include('notify::messages')
        @notifyJs
        @notifyCss
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand text-white" href="{{url('')}}">IdfGear.Net</a>
            
            <a class="nav-link text-white" href="{{url('shop/cart')}}">
            @if (! Cart::isEmpty())
            <div class="total-in-cart">{{Cart::getTotalQuantity()}}</div>
            @endif
                <i class="fas fa-shopping-cart"></i>
              </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('shop')}}">Shop</a>
              </li>
              @if(!empty($menu))
              @foreach($menu as $menu_item)
              <li class="nav-item">
              <a class="nav-link text-white" href="{{url($menu_item->url)}}">{{$menu_item->link}}</a>
              </li>
              @endforeach
              @endif
          </ul>
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item dropdown">
              <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-flag"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('flag/language')}}"> {{__('text.language')}} </a>
                @if(Session::has('user_id'))
                {{--
                  TO DO ONCE OPENING THE PROJECT AT MORNING
                  EDIT PROFILE
                  ALL THE INFO OF THE USER
                  ONCE USER CLICKS HIS NAME NAVIGATE HIM TO HIS PROFILE IT SELF
                  ONLY THE SAME USER CAN SEE HIS OWN PROFILE--}}
                  <a class="dropdown-item" href="{{url('user/profile')}}"> {{__('text.edit_profile')}} </a>
                @endif
            </li>
            

            @if(!Session::has('user_id'))
            <li class="nav-item">
              <a class="nav-link text-white" href="{{url('user/signin')}}"> {{__('text.signin')}} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('user/signup')}}"> {{__('text.signup')}} </a>
              </li>
              @else
              @if(Session::get('is_admin'))
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('cms/dashboard')}}"> {{__('text.admin_dashboard')}} </a>
              </li>
              @endif
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('user/profile')}}">{{Session::get('user_name')}}</a>
                {{-- style="cursor: no-drop;" --}}
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white" href="{{url('user/logout')}}"> {{__('text.logout')}} </a>
                </li>
              @endif
          </ul>
        </div>
    </div>
      </nav>

    </header>
    <main style="min-height: 850px;">
    @yield('content')
    </main>
    <footer class="bg-dark p-2 text-white">

      @component('components.whatsapp')
      @slot('number') 972528262490 @endslot
      @endcomponent
      
    <footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">idfgear</h5>
        <p class="p-footer">Here you can use rows and columns to organize your footer content.</p>
        <p class="p-footer">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
          esse
          quasi, veritatis totam voluptas nostrum.</p>

      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <h5 class="font-weight-bold text-uppercase mb-4">Categories <i class="fas fa-link"></i> </h5>

        <ul class="list-unstyled">
        @foreach ($caregories as $categorie)
        <li>
          <p>
            <a class="text-white" href="{{asset('shop/'.$categorie->url)}}">{{$categorie->title}}</a>
          </p>
        </li>
        @endforeach

        </ul>

      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <h5 class="font-weight-bold text-uppercase mb-4">Address <i class="fas fa-map-marker-alt"></i> </h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> info@example.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          </li>
          <li>
        </ul>

      </div>

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

        {{-- <!-- Facebook -->
        <a type="button" class="btn-floating btn-fb">
          <i class="fab fa-facebook-f"></i>
        </a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-tw">
          <i class="fab fa-twitter"></i>
        </a> --}}
        <!-- instagram -->
        <a type="button" target="_blank" href="https://www.instagram.com/dvirzohar1/" class="btn-floating btn-gplus">
          <i class="fab fa-instagram"></i>
        </a>
        <!-- Linkedin -->
        <a type="button" target="_blank" href="https://www.linkedin.com/in/dvir-zohar-04978078/" class="btn-floating btn-linkedin">
          <i class="fab fa-linkedin"></i>
        </a>

      </div>
      <div class="paypal">
      <a class="btn-floating btn-dribbble">
      <img style="max-width: 40% !important; height: auto;" class="rounded mx-auto d-block float-left" src="{{asset('images/Powered-By-PayPal-Logo.png')}}">
      </a>
    </div>
    </div>


  </div>

  <div class="footer-copyright text-center py-3">&copy; {{date('Y')}} Copyright:
    <a href="http://about-rcn.me/"> Ori Applebaum</a>
  </div>

</footer>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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

    
  <script src="{{asset('js/script.js')}}"></script>
  </body>
</html>