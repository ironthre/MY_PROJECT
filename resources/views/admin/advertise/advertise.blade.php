<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?  family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('admin/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />

    <link href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet">
</head>
<body class="g-sidenav-show  bg-gray-200">
    {{--  @include('layouts.include.sidebar')  --}}

    <main class="main-content position-relative max-height-vh-100 h-100   border-radius-lg ">
        {{--  @include('layouts.include.navbar')  --}}

    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
        <a class="font-weight-bolder mb-0 text-dark" href="{{ url('/advertise') }}">Return to Dashboard</a>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          {{--  <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>  --}}

          <ul class="navbar-nav  justify-content-end">

            <li class="nav-item px-3 d-flex align-items-center">
              <a href="{{ url('/user-access') }}" class="nav-link text-body p-0">
                <i class="fa fa-add btn btn-outline-primary fixed-plugin-button-nav cursor-pointer">user access</i>
              </a>
            </li>

            <li class="nav-item px-3 d-flex align-items-center">
                <a href="{{ url('/view-ads') }}" class="nav-link text-body p-0">
                  <i class="fa fa-add btn btn-outline-primary fixed-plugin-button-nav cursor-pointer">Advertise</i>
                </a>
            </li>

            <li class="nav-item d-flex align-items-center" >
                <a class="nav-link text-white " href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10"></i>
                  </div>
                  <h6 class="font-weight-bolder mb-0">{{ __('Logout') }}</h6>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

        <div class="container-fluid py-4">
            <div class="content">
                @yield('content')
            </div>
            @include('layouts.include.containerFooter')
        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="{{ asset('userside/js/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/js/core/popper.min.js')}}"></script>
    <script src="{{ asset('admin/js/core/bootstrap.min.js')}}"></script>
    <script src="{{ asset('userside/js/parsley.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{ asset('admin/js/plugins/chartjs.min.js')}}"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts     for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>


    {{-- Sweet Alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("{{ session('status');}}");
        </script>
    @endif

    @yield('scripts')

</body>
</html>
