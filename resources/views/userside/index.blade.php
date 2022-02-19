
@extends('layouts.userside')


@section('title')
    ANDMACK
@endsection

@section('content')
    @include('layouts.include.slider')
    @include('layouts.include.categoryList')
    {{-- Featured Products --}}


{{--  --}}
<div class="container mt-4">
    <div class="row">
        <h4 class="text-primary"><a class="mb-4" href="{{url('view-category/Mobile Phones')}} "> Featured products</a></h4>
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($featured_products as $prod)
                <div class="col-md-3 item ">
                    <div class="card product headache mb-3">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-20%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div>
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div class="d-flex flex-column mb-2"> <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small> </div>
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

    <div class="container mt-2">
    <div class="row">
        <h4 class="text-primary mb-2"><a class="" href="{{url('view-category/Mobile Phones')}} "> Mobile Phones</a></h4>
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($phone as $prod)
            @php
            $x= $prod->selling_price;
            $y=$prod->org_price;
            $z= ($x-$y)/100;

            @endphp
                <div class="col-md-3 item">
                    <div class="card product headache mb-3">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">{{$z}}</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div>
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div class="d-flex flex-column mb-2"> <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small> </div>
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

    {{-- Trending Category/Products --}}
    <div class="container mt-2">
    <div class="row">
        <h4 class="text-primary mb-2"><a class="" href="{{url('view-category/Accessories')}}"> Accessories </a></h4>
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($accessory as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache mb-3">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div>
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div class="d-flex flex-column mb-2"> <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small> </div>
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
    {{-- Mobile phones --}}
  <div class="container mt-2">
    <div class="row">
        <h4 class="text-primary mb-2"><a class="" href="{{url('view-category/Music System')}}"> Music System </a></h4>
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($music as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache mb-3">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div>
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div class="d-flex flex-column mb-2"> <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small> </div>
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

{{-- Vitenge na Kanga --}}
<div class="container mt-2">
    <div class="row">
        <h4 class="text-primary mb-2"><a class="" href="{{url('view-category/Televisions')}}"> Flat Screen TV </a></h4>
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($tv as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache mb-3">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div>
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div class="d-flex flex-column mb-2"> <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small> </div>
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

{{-- Accessories --}}
<div class="container mt-2">
    <div class="row">
        <h4 class="text-primary mb-2"><a class="" href="{{url('view-category/Hand Bags')}}"> Hand Bags </a></h4>
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($bags as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache mb-3">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div>
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div class="d-flex flex-column mb-2"> <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small> </div>
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

{{-- TV --}}
<div class="container mt-2">
    <div class="row">
        <h4 class="text-primary mb-2"><a class="" href="{{url('view-category/Sandals')}}"> Sandals </a></h4>
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($sandals as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache mb-3">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div>
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div class="d-flex flex-column mb-2"> <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small> </div>
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

{{--  --}}
<div class="container mt-2">
    <div class="row">
        <h4 class="text-primary mb-2"><a class="" href="{{url('view-category/Textile & Decor')}}"> Textile and Decor </a></h4>
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($textile as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache mb-3">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div>
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div class="d-flex flex-column mb-2"> <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small> </div>
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

{{--  --}}
<div class="container mt-2">
    <div class="row">
        <h4 class="text-primary mb-2"><a class="" href="{{url('view-category/Kanga & Vitenge')}}"> Kanga na Vitenge </a></h4>
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($kanga as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache mb-3">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div>
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div class="d-flex flex-column mb-2"> <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small> </div>
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




    {{-- @include('layouts.include.productCard') --}}


@endsection


@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
        center: true,
        items:2,
        loop:true,
        nav: true,
        navText: ["<i class='fa fa-2x fa-chevron-left' style='color:white'></i>","<i class='fa fa-2x fa-chevron-right' style='color:white'></i>"],
        margin:1,
        responsive:{
            600:{
                items:5
            }
            // 1000:{
            //     items:5
            // }
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
                $('.wishlist-count').html();
                $('.wishlist-count').html(response.wish);
            }
        });
    }
</script>


@endsection
