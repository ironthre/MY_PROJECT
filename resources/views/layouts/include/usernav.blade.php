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


<div class="navbar row navbar-expand-lg brand navbar-light bg-white">
  <div class="container-fluid collapse navbar-collapse">
     <div class="col-sm-3 col-4 ">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{ asset('assets/image/Logo3.png')}}" alt="" width="250" height="100" class="d-block logo img-fluid">
        </a>
    </div>
    <div class=" border border-primary bar rounded p-0 order-xs-12" id=" ">
      <form class="d-flex searchform" action="{{url('searchProduct')}}" method="POST">
        @csrf
        <input type="search" class="form-control border-0 " id="searchBar" name="searchproducts" id="" placeholder="Search here...." >
        <button class="btn btn-outline-white bg-primary" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>
    <div class="modal-header border-bottom-0 small-icon">
        <li class="icon-button show-side-menu ml-3">
			<a class=" "  data-toggle="modal" data-target="#sideModal" >
                <span class="fas fa-bars material-icons"></span>
            </a>
		</li>
    @guest
        @if (Route::has('login') || Route::has('register'))
        <li class="icon-button ml-3">
			<a class=" "  data-toggle="modal" data-target="#loginModal">
                <span class="fas fa-user material-icons"></span>
            </a>
		</li>
        @endif
        @else
        {{-- <li class="">
			<a class=" "  data-toggle="modal" data-target="#loginModal">
                <span class="fas fa-heart material-icons"></span>
            </a>
		</li> --}}
        <li class="nr_li dd_main icon-button ml-3">
                    <a class=" "  >
                <span class="fas fa-user material-icons"></span>
            </a>
					<div class="dd_menu">
						<div class="dd_left">
							<ul>
								<li><i class="far fa-plus-square"></i></li>
								<li><i class="fas fa-cog"></i></li>
								<li><i class="fas fa-sign-out-alt"></i></li>
							</ul>
						</div>
						<div class="dd_right">
							<ul>
								<li>Profile</li>
								<li><a class=""  href="{{url('my-orders')}}">Orders</a></li>
								<li>
                                    <a class=""  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                                </li>
							</ul>
						</div>
					</div>
				</li>

    @endguest
        <li class="icon-button d-flex srch-icon ml-3">
			<a class=" "  onclick="open_search()" data-toggle="collapse" data-target="#exampleModal">
                <span class="fas fa-search material-icons"></span>
            </a>
		</li>
        <li class="icon-button ml-3">
            <a class=" "  href="{{url('cart')}}">
                <span class="fas fa-shopping-cart material-icons"></span>
                <span class="icon-button__badge cart-count">0</span>
            </a>
		</li>
      </div>
    @auth
        <li class="icon-button wish-icon">
			<a class=" "  href="{{url('wishlist')}}">
                <span class="fas fa-heart material-icons"></span>
                <span class="icon-button__badge wishlist-count">0</span>
            </a>
		</li>
    @endauth
    <div class="collapse navbar-collapse page-wrapper toggled " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <form class="d-flex hidden-search mx-auto" action="{{url('searchProduct')}}"  method="POST">
                            @csrf
                            <div class="input-group-prepend mr-3">
                                <div class="btn input-group-text fas fa-arrow-left-long" onclick="close_search()"></div>
                            </div>
                            <input type="search" class="form-control border-0 " id="searchBar" name="searchproducts" id="" placeholder="Search here...." >
                            <button class="btn btn-outline-white bg-primary" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                         <script>
        var availableTags = [];
        $.ajax({
            method: "GET",
            url: "{{ url('/product-list')}}",
            success: function(response){
                searchProducts(response);
            }
        });

        function searchProducts(availableTags){
            $( "#searchBar" ).autocomplete({
            source: availableTags
            });
        }
  </script>
    </div>


        @include('layouts.include.account')
        <div class="vr"></div>
    </div>

    {{-- Login Menu --}}
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
    {{-- End Of Login Menu --}}

    {{-- Side Menu Model --}}
    <div class="modal fade" id="sideModal" tabindex="-1" role="dialog"   aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header men-modal-header border-bottom-0">
                    <h5 class="model-title">Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column ">
                        <li class="model-item ">
                            <a class="nav-link " href="{{url('/')}}"><span class="fas fa-house-chimney material-icons mr-3"></span>Home</a>
                        </li>
                        <li class="model-item ">
                            <a class="nav-link " href="{{url('/All Products')}}"><span class="fas fa-bag-shopping material-icons mr-3"></span>Products</a>
                        </li>
                        <li class="model-item ">
                            <a class="nav-link "  href="{{url('contact')}}"><span class="fa-regular fa-comments material-icons mr-3"></span>  Contact</a>
                        </li>
                        <li class="model-item ">
                            <a class="nav-link " href="{{url('about')}}"><span class="fas fa-info mr-3"></span>About</a>
                        </li>
                        <li class="model-item ">
                            <a class="nav-link " href="{{url('about')}}"><span class="fas fa-heart material-icons mr-3"></span>Help</a>
                        </li>
                        @auth
                        <li class="model-item ">
                            <a class="nav-link "  href="{{url('contact')}}"><span class="fa fa-user material-icons mr-3"></span>  Profile</a>
                        </li>
                        <li class="model-item ">
                            <a class="nav-link " href="{{url('about')}}"><span class="fa fa-shop mr-3"></span>Orders</a>
                        </li>
                        <li class="model-item ">
                            <a class="nav-link " href="{{url('about')}}"><span class="fas fa-sign-out-alt material-icons mr-3"></span>Logout</a>
                        </li>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Of Side Menu --}}

  </div>
</div>


<nav class="navbar navbar-expand-lg sticky-top navbar-light menu  bg-primary">
  <div class="container ">
    <button class="navbar-toggler" type="button" onclick="sideNav_open()" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"  aria-label="Toggle navigation">
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

<script>
    function open_search(){
        document.getElementById("exampleModal").style.display = "block ";
    }
     function close_search(){
        document.getElementById("exampleModal").style.display = "none ";
    }
</script>

<style type="css/text">

    @media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{   }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
    }
</style>
