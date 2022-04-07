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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('userside/js/all.js')}}"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    @yield('head')




    <!-- Material Icons -->


    <!-- CSS Files -->
    <link href="{{ asset('userside/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('userside/css/login.css')}}">
    <link href="{{ asset('userside/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('userside/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('userside/css/owl.theme.default.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('userside/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('userside/css/demo.css')}}">--}}
    <link rel="stylesheet" href="{{ asset('userside/css/product.css')}}">
    {{-- <script  src="{{ asset('userside/js/script.js')}}"></script> --}}

</head>
<body >



    @include('layouts.include.usernav')
    <div class="content bg-light">
        @yield('content')
    </div>
    @include('layouts.include.footer')


    <!--   Core JS Files   -->
    <script src="{{ asset('userside/js/jquery.min.js')}}"></script>
    <script src="{{ asset('userside/js/owl.carousel.min.js')}}"></script>
     <!-- Popper JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="{{ asset('userside/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('userside/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('userside/js/parsley.min.js') }}"></script>
    <script src="{{ asset('userside/js/all.js')}}"></script>
      {{-- Custom Script --}}
    {{-- <script src="{{ asset('userside/js/script.js')}}"></script> --}}
    <script src="{{ asset('userside/js/imageChange.js')}}"></script>
    <script src="{{ asset('userside/js/main.js') }}"></script>


    {{-- Sweet Alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            {{--  swal("{{ session('status','success');}}");  --}}
            swal("Order","{{ session('status');}}","success");

        </script>
    @endif
    {{--  @if (session('status-cart'))
        <script>
            swal("Order","{{ session('status-cart');}}","success");
        </script>

    @endif  --}}

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

    @yield('scripts')

</body>
</html>
