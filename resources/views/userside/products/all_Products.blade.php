@extends('layouts.userside')

@section('title')
    All Products
@endsection

@section('content')
    <div class="container mt-2 ">
        <nav aria-label="breadcrumb font-weight-bolder">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark " href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item text-sm text-dark active font-weight-bolder" aria-current="page">Products</li>
          </ol>
        </nav>
        <div class="row justify-content-center">
            @foreach ($all_products as $prod)
                <div class="col-md-2.2 item">
                    <div class="card product my-3 mx-3 headache">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-25%</span> <span class="wishlist2"><i class="far fa-heart "></i></span> </div>
                            </div> <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div class="d-flex flex-column mb-2"> <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->selling_price}}</small> </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div> <i class="fa fa-star rating-star"></i> <span class="rating-number">4.8</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
 <link rel="stylesheet" href="{{ asset('userside/css/hide-menu.css')}}">
@endsection
