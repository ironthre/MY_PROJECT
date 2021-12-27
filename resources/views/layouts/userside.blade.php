<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
       @yield('title')
    </title>

    <!--     Fonts and icons     -->

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js"    crossorigin="anonymous"></script>
    <script src="{{ asset('userside/js/all.js')}}"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>




    <!-- Material Icons -->


    <!-- CSS Files -->
    <link href="{{ asset('userside/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('userside/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('userside/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('userside/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('userside/css/all.css')}}">

</head>
<body >



    @include('layouts.include.usernav')
    <div class="content">
        @yield('content')
    </div>


    <!--   Core JS Files   -->
    <script src="{{ asset('userside/js/jquery.min.js')}}"></script>
    <script src="{{ asset('userside/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('userside/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('userside/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('userside/js/all.js')}}"></script>

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
