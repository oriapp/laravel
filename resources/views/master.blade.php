<!doctype html>
<html lang="he">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <title>{{"$page_title" ?? ''}}</title>
  <script>let BASE_URL = "{{ url('') }}/";</script>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container">
            <a class="navbar-brand text-white" href="{{url('')}}">i<i class="fas fa-car"></i>CARS</a>
            
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
              <a class="nav-link text-white" href="{{url('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('shop')}}">Shop</a>
              </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            @if(!Session::has('user_id'))
            <li class="nav-item">
              <a class="nav-link text-white" href="{{url('user/signin')}}">Signin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('user/signup')}}">Signup</a>
              </li>
              @else
              <li class="nav-item">
                <a style="cursor: no-drop;" class="nav-link text-white disabled" href="{{url('user/profile')}}">{{Session::get('user_name')}}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white" href="{{url('user/logout')}}">Logout</a>
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
    <footer class="bg-primary p-2">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="text-center text-white mb-0">
              iCARS &copy; {{date('Y')}}
            </p>
          </div>
        </div>
      </div>
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
  <script src="{{asset('js/script.js')}}"></script>
  </body>
</html>