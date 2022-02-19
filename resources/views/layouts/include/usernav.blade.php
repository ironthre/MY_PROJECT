@section('scripts')
    <script>
        $(document).ready(function() {
            loadcart();
            loadwish();

            function loadcart(){
                $.ajax({
                    method: "GET",
                    url: "{{ url('/load-cart-data')}}",
                    success: function(response){
                        $('.cart-count').html();
                        $('.cart-count').html(response.count);

                    }
                });
            }

            function loadwish(){
                $.ajax({
                    method: "GET",
                    url: "{{ url('/load-wish-data')}}",
                    success: function(response){
                        console.log(response.wish)
                        $('.wishlist-count').html();
                        $('.wishlist-count').html(response.wish);
                    }
                });
            }
        });
    </script>
@endsection


<nav class="navbar navbar-expand-lg contact navbar-light bg-primary">
  <div class="container-fluid">
      <div class="col-7 col-sm-8  col-md-5  mx-auto">
          <span class="">
            Welcome to our Online Shopping center
          </span>
      </div>
      <div class="col-5 col-sm-4  col-md-3  mx-auto ">
          <i class="fas fa-phone-alt"></i><span>+255 743 289 196</span>

      </div>
       <div class=" col-sm-3  col-md-4 d-none d-md-block mx-auto justify-content-center ">
           <i class="fas fa-envelope fa-fw"></i><span>info@andmack.co.tz</span>
      </div>
  </div>
</nav>


<div class="navbar navbar-expand-lg brand navbar-light bg-white">
  <div class="container-fluid collapse navbar-collapse">
     <div class="col-sm-4 ">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{ asset('assets/image/Logo3.png')}}" alt="" width="350" height="100" class="d-block img-fluid">
        </a>
    </div>
    <div class="col-sm-5 border border-primary rounded p-0 order-xs-12" id=" ">
      <form class="d-flex" action="{{url('searchProduct')}}" method="POST">
        @csrf
        <input type="search" class="form-control border-0 " id="searchBar" name="searchproducts" id="" placeholder="Search here...." >
        <button class="btn btn-outline-white bg-primary" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>
    <div class="col-sm-3 pr-auto hstack gap-3 order-xs-1 user">

        @guest
            @if (Route::has('login'))
                <a class="btn  " data-toggle="modal" data-target="#loginModal"><i class="fa fa-user fa-fw"></i><span class="hidelink d-xs-none">Login</span></a>
            @endif

            @if(Route::has('register'))
                <a class="btn  " href="{{ route('register') }}"><i class="fa fa-user-plus fa-fw me-sm-1"></i><span class="hidelink">{{ __('Register') }}</span></a>

            @endif

            @else

            <h4 class="btn">{{ Auth::user()->name }}</h4>
            <a class="btn"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
            {{-- <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                                    <li>
                                        <a class="dropdown-item"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </div>
                            </li> --}}
            {{-- <div class="row ml-2">
                <h4>{{Auth::user()->name}}</h4>
                <a class="btn btn-outline-primary"  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                </form>
            </div> --}}

        @endguest



        {{-- <a href="" class="pl-2" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user fa-2x"></i> <span class="ml-1">Login</span> </a> --}}
        <div class="vr"></div>
    </div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"   aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
          <h4>Login</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your email address..." required autocomplete="email" autofocus>

              @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
              @enderror
            </div>
            <div class="form-group">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Your password..." required autocomplete="current-password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-info btn-block btn-round">{{ __('Login') }}</button>
          </form>

          <div class="text-center text-muted delimiter">or use a social network</div>
          <div class="d-flex justify-content-center social-buttons">
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
              <i class="fab fa-facebook"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
              <i class="fab fa-linkedin"></i>
            </button>
          </div>
           <div class="modal-footer d-flex justify-content-center">
                <div class="signup-section">
                    Not a member yet? <a href="{{ route('register') }}" class="text-info" >{{ __('Register') }}</a>.
                </div>
{{-- Register model --}}

{{-- End of Register Model --}}
           </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</div>





<nav class="navbar navbar-expand-lg sticky-top navbar-light menu  bg-primary">
  <div class="container ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"  aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse page-wrapper  toggled" id="navbarNav">
      <ul class="nav menu mx-auto">
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Categories </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="{{url('view-category/Mobile Phones')}} "> Mobile Phones</a></li>
			  <li><a class="dropdown-item" href="{{url('view-category/Accessories')}}"> Accessories </a></li>
			  <li><a class="dropdown-item" href="{{url('view-category/Textile & Decor')}}"> Textile and Decor </a></li>
              <li><a class="dropdown-item" href="{{url('view-category/Kanga & Vitenge')}}"> Kanga na Vitenge </a></li>
			  <li><a class="dropdown-item" href="{{url('view-category/Hand Bags')}}"> Hand Bags </a></li>
              <li><a class="dropdown-item" href="{{url('view-category/Televisions')}}"> Flat Screen TV </a></li>
			  <li><a class="dropdown-item" href="{{url('view-category/Sandals')}}"> Sandals </a></li>
              <li><a class="dropdown-item" href="{{url('view-category/Music System')}}"> Music System </a></li>
		    </ul>
		</li>
        <li class="nav-item ">
          <a class="nav-link " href="{{url('/All Products')}}">Products</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link "  href="{{url('cart')}}">
            Cart
            (<span class="badge badge-pill cart-count">0</span>)
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link "  href="{{url('wishlist')}}">Wishlist
          (<span class="badge badge-pill wishlist-count">0</span>)</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link "  href="{{url('my-orders')}}">My Orders</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link "  href="{{url('contact')}}">Contact</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="{{url('about')}}">About</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="{{url('about')}}">Help</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style type="css/text">
    @media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{   }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
    }
</style>
