
@extends('layouts.userside')


@section('title')
    ANDMACK
@endsection

@section('content')
    @include('layouts.include.slider')
    @include('layouts.include.categoryList')
    {{-- Featured Products --}}


{{--  --}}
<div class="container mt-2">
    <div class="row">
        <h4 class="text-primary mb-2">Featured Products</h4>
        <div class="owl-carousel featured-carousel owl-theme">
            @foreach ($featured_products as $prod)
            @php
            $x= $prod->selling_price;
            $y=$prod->org_price;
            $z= ($x-$y)/100;

            @endphp
                <div class="col-md-3 item">
                    <div class="card product headache">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div> <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
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
        <h4 class="text-primary mb-2">Mobile Phones</h4>
        <div class="owl-carousel featured-carousel owl-theme">
            @foreach ($phone as $prod)
            @php
            $x= $prod->selling_price;
            $y=$prod->org_price;
            $z= ($x-$y)/100;

            @endphp
                <div class="col-md-3 item">
                    <div class="card product headache">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">{{$z}}</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div> <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
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
        <h4 class="text-primary mb-2">Accessories</h4>
        <div class="owl-carousel featured-carousel owl-theme">
            @foreach ($accessory as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div> <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
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
        <h4 class="text-primary mb-2">Music Sytem</h4>
        <div class="owl-carousel featured-carousel owl-theme">
            @foreach ($music as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div> <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
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
        <h4 class="text-primary mb-2">Flat Screen</h4>
        <div class="owl-carousel featured-carousel owl-theme">
            @foreach ($tv as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div> <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
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
        <h4 class="text-primary mb-2">Hand Bags</h4>
        <div class="owl-carousel featured-carousel owl-theme">
            @foreach ($bags as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div> <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
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
        <h4 class="text-primary mb-2">Sandals</h4>
        <div class="owl-carousel featured-carousel owl-theme">
            @foreach ($sandals as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div> <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
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
        <h4 class="text-primary mb-2">Textile and Decor</h4>
        <div class="owl-carousel featured-carousel owl-theme">
            @foreach ($textile as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div> <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
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
        <h4 class="text-primary mb-2">Kanga and Vitenge</h4>
        <div class="owl-carousel featured-carousel owl-theme">
            @foreach ($kanga as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-{{$z}}%</span> <span class="wishlist2"><i class="far fa-heart"></i></span> </div>
                            </div> <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
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
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

</script>


@endsection
