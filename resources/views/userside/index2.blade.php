@extends('layouts.userside')

@section('content')
@include('layouts.include.slider')
@include('layouts.include.col')

<div class="container">
    <div class="row">
        <h4>Featured prducts</h4>
        @foreach ($featured_products as $product)
        <div class="card col-6 col-md-4 mx-auto col-lg-2.2 item">
            <h4></h4>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="discount">-25%</span> <span class="wishlist2"><i class="far fa-heart "></i></span>
                </div>
                <div class="upper">
                    <img src="{{asset('assets/uploads/product/'.$product->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                </div>
                <div class="lower">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="dress-name"><a href="{{url('Product-Details/'.$product->name)}}">{{$product->name}}</a></h5>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-1">
                                <div class="d-flex flex-column mb-2"> <span class="new-price">Tsh {{$product->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$product->selling_price}}</small> </div>
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



@endsection
$('.featured-carousel').owlCarousel({
    center: false,
    // items:2,
    loop:true,
    nav: true,
    navText: ["<i class='fa  fa-chevron-left' style='color:white'></i>","<i class='fa  fa-chevron-right' style='color:white'></i>"],
    margin:1,
    responsive:{
         600:{
             items:5
         }
    //     1000:{
    //          items:5
    //  }
    }
        // center: true,
        // loop:true,
        // margin:10,
        // nav:true,
        // dots:false,
        // responsive:{
        //     // 0:{
        //     //     items:2
        //     // },
        //      600:{
        //          items:5
        //      },
        //     // 1000:{
        //     //     items:5
        //     // }
        // }
})
