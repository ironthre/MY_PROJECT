@extends('layouts.userside')

@section('title')

@endsection
@section('head')
    <link rel="stylesheet" href="{{ asset('userside/css/product.css')}}">

@endsection

@section('content')
     {{-- <div class="py-2">
        <div class="container">
            <h2 class="text-primary">{{$category->name}}</h2>
            <div class="row">
                    @foreach ($product as $prod)
                        <div class="item">
                            <a href="{{url('category/'.$category->name.'/'.$prod->name)}}">
                                <div class="card border-0 " style="height: 250px;" >
                                    <div class="card-body">
                                        <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 150px;" class="card-img-top" alt="product image">
                                        <h6 class="">{{$prod->name}}</h6>
                                        <span class="float-start">Tsh {{$prod->selling_price}}</span><br>
                                        <small><span class="float-start"> <s>Tsh {{$prod->org_price}}</s> </span></small>
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach
            </div>
        </div>
    </div> --}}
    <div class="container mt-2">
    <h2 class="text-primary">{{$category->name}}</h2>
        <div class="row">
            @foreach ($product as $prod)
                <div class="col-md-3 item">
                    <div class="card product">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-25%</span> <span class="wishlist1"><i class="far fa-heart"></i></span> </div>
                            </div> <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name">{{$prod->name}}</h5>
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

@endsection
