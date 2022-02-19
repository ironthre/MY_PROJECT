@extends('layouts.userside')

@section('content')
<div class="container bg mt-2">
    <nav aria-label="breadcrumb font-weight-bolder">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark font-weight-bolder" href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item text-sm text-dark active font-weight-bolder" aria-current="page">About</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card my-5 border-0">
                <div class="card-header" style="font-weight: bold"><h4>{{ __('About Us') }}</h4></div>

                <div class="card-body">
                    <p> <strong style="font-weight: bolder;">Andmack Business</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, amet cupiditate hic tenetur magnam cumque doloribus, a animi eveniet impedit saepe iusto quasi, nam ullam perspiciatis enim magni quidem delectus! </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, velit! Quo doloremque sequi nostrum eveniet laudantium similique facere quas, ipsum quibusdam beatae ab commodi quisquam deleniti quod suscipit deserunt sint!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xl-5 col-sm-6  mb-4">
          <div class="card">
            <div class="card-heade p-3 pt-2">
              <div class="">
                <h4 class="text-capitalize "><img src="{{asset('assets/image/freeDerivery.png')}}" width="60px" height="80px" alt="">free delivery in dodoma </h4>
                <p class="mb-0"><span class="text-danger text-sm font-weight-bolder"><i class="fa fa-heart"></i></span>Just tell us where you live</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-5 col-sm-6  mb-4">
          <div class="card">
            <div class="card-heade p-3 pt-2">
              <div class="">
                <h4 class="text-capitalize "><img src="{{asset('assets/image/securePayment1.jpg')}}" width="60px" height="80px" alt="">secure payment</h4>
                <p class="mb-0"><span class="text-danger text-sm font-weight-bolder"><i class="fa fa-heart"></i></span> pay cash on delivery</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-sm-6  mb-4">
          <div class="card">
            <div class="card-heade p-3 pt-2">
              <div class="">
                <h4 class="text-capitalize "><img src="{{asset('assets/image/customerService.png')}}" width="60px" height="80px" alt="">full customer care support</h4>
                <p class="mb-0"><span class="text-danger text-sm font-weight-bolder"><i class="fa fa-heart"></i></span> Monday to satarday</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-sm-6  mb-4">
          <div class="card">
            <div class="card-heade p-3 pt-2">
              <div class="">
                <h4 class="text-capitalize "><img src="{{asset('assets/image/customerService.png')}}" width="60px" height="80px" alt="">full customer care support</h4>
                <p class="mb-0"><span class="text-danger text-sm font-weight-bolder"><i class="fa fa-heart"></i></span> Monday to satarday</p>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

{{-- <link id="" href="{{ asset('admin/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" /> --}}

 <link rel="stylesheet" href="{{ asset('userside/css/hide-top.css')}}">
  <link rel="stylesheet" href="{{ asset('userside/css/about.css')}}">

@endsection
