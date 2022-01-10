
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
      <div class="col-sm-4">
          <span class="">
            Welcome to our Online Shopping center
          </span>
      </div>
      <div class="col-sm-4">
          <i class="fas fa-phone-alt"></i> <span>+255 743 289 196</span>

      </div>
       <div class="col-sm-4 justify-content-center">
           <i class="fas fa-envelope fa-fw"></i><span>info@andmack.co.tz</span>


      </div>
      <div class="col-sm-4">

      </div>
  </div>
</nav>


<div class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
     <div class="col-sm-4">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/image/shop.jfif')}}" alt="" width="70" height="64">&nbsp;
            <strong>AndMack Mall</strong>
        </a>
    </div>
    <div class="col-sm-5 border border-primary rounded p-0" id=" ">
      <form class="d-flex">
        <input type="text" class="form-control border-0 " name="search" id="" placeholder="Search here...." >
        <button class="btn btn-outline-white bg-primary" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>
    <div class="col-sm-3 pr-auto">
        <a href="" class="pl-2" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user fa-2x"></i> <span class="ml-1">Login</span> </a>
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
        <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
      </div>
        </div>
      </div>
    </div>

  </div>
</div>
  </div>
</div>

<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-primary">
  <div class="container ">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"  aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse page-wrapper toggled" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark"  href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
