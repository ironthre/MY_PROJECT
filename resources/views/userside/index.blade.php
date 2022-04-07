{{--  <div id="loader-wrapper">
    <div id="loader">

    </div>

    <div class="loader-section section-left"><img src="{{ asset('assets/image/Logo3.png')}}" alt="" width="250" height="100" class="d-block logo img-fluid"></div>
    <div class="loader-section section-right"></div>

</div>  --}}
@extends('layouts.userside')


@section('title')
    ANDMACK
@endsection

@section('content')

@include('layouts.include.slider')
@include('layouts.include.category')
    {{-- Featured Products --}}


{{--  --}}
<div class="container mt-4">
    <div class="row">
        <h4 class="text-primary"> Featured products</h4>
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($featured_products as $prod)
                @php
                    $selling_price = $prod->selling_price;
                    $org_price = $prod->org_price;
                    $disc_price = $org_price-$selling_price;
                    $disc_percentage = round($disc_price/$org_price*100, 2);
                @endphp
                <div class=" item ">
                    <div class="card   product headache mb-3">
                        <div class="image-container">
                            <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                            </a>
                        </div>
                        <div class="product-detail-container p-2 mb-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>

                            <div class=" justify-content-between  rating ">
                                <div>
                                    @if ($prod->rate == 4.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>

                                    @elseif($prod->rate == 4)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @elseif ($prod->rate == 3.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @else
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @endif
                                    <span class="rating-number">{{$prod->rate}}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="d-flex flex-column mb-2">
                                    <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small>
                                </div>
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="discount">-{{$disc_percentage}}%</span>
                                    </div>
                                </div>
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
                    $selling_price = $prod->selling_price;
                    $org_price = $prod->org_price;
                    $disc_price = $org_price-$selling_price;
                    $disc_percentage = round($disc_price/$org_price*100, 2);
                @endphp
                <div class=" item">
                    <div class="card   product headache mb-3">
                        <div class="image-container">
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>

                            <div class="rating justify-content-between  ">
                                <div>
                                    @if ($prod->rate == 4.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>

                                    @elseif($prod->rate == 4)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @elseif ($prod->rate == 3.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @else
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @endif
                                    <span class="rating-number">{{$prod->rate}}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="d-flex flex-column mb-2">
                                    <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small>
                                </div>
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="discount">-{{$disc_percentage}}%</span>
                                    </div>
                                </div>
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
                @php
                    $selling_price = $prod->selling_price;
                    $org_price = $prod->org_price;
                    $disc_price = $org_price-$selling_price;
                    $disc_percentage = round($disc_price/$org_price*100, 2);
                @endphp
                <div class=" item">
                    <div class="card   product headache mb-3">
                        <div class="image-container">
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>

                            <div class="rating justify-content-between  ">
                                <div>
                                    @if ($prod->rate == 4.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>

                                    @elseif($prod->rate == 4)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @elseif ($prod->rate == 3.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @else
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @endif
                                    <span class="rating-number">{{$prod->rate}}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="d-flex flex-column mb-2">
                                    <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small>
                                </div>
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="discount">-{{$disc_percentage}}%</span>
                                    </div>
                                </div>
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
                @php
                    $selling_price = $prod->selling_price;
                    $org_price = $prod->org_price;
                    $disc_price = $org_price-$selling_price;
                    $disc_percentage = round($disc_price/$org_price*100, 2);
                @endphp
                <div class=" item">
                    <div class="card   product headache mb-3">
                        <div class="image-container">
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>

                            <div class="rating justify-content-between  ">
                                <div>
                                    @if ($prod->rate == 4.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>

                                    @elseif($prod->rate == 4)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @elseif ($prod->rate == 3.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @else
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @endif
                                    <span class="rating-number">{{$prod->rate}}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="d-flex flex-column mb-2">
                                    <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small>
                                </div>
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="discount">-{{$disc_percentage}}%</span>
                                    </div>
                                </div>
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
                @php
                    $selling_price = $prod->selling_price;
                    $org_price = $prod->org_price;
                    $disc_price = $org_price-$selling_price;
                    $disc_percentage = round($disc_price/$org_price*100, 2);
                @endphp
                <div class=" item">
                    <div class="card   product headache mb-3">
                        <div class="image-container">
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>

                            <div class="rating justify-content-between  ">
                                <div>
                                    @if ($prod->rate == 4.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>

                                    @elseif($prod->rate == 4)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @elseif ($prod->rate == 3.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @else
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @endif
                                    <span class="rating-number">{{$prod->rate}}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="d-flex flex-column mb-2">
                                    <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small>
                                </div>
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="discount">-{{$disc_percentage}}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('layouts.include.ads')

{{-- Accessories --}}
<div class="container mt-2">
    <div class="row">
        <h4 class="text-primary mb-2"><a class="" href="{{url('view-category/Hand Bags')}}"> Hand Bags </a></h4>
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($bags as $prod)
                @php
                    $selling_price = $prod->selling_price;
                    $org_price = $prod->org_price;
                    $disc_price = $org_price-$selling_price;
                    $disc_percentage = round($disc_price/$org_price*100, 2);
                @endphp
                <div class=" item">
                    <div class="card   product headache mb-3">
                        <div class="image-container">
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>

                            <div class="rating justify-content-between  ">
                                <div>
                                    @if ($prod->rate == 4.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>

                                    @elseif($prod->rate == 4)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @elseif ($prod->rate == 3.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @else
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @endif
                                    <span class="rating-number">{{$prod->rate}}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="d-flex flex-column mb-2">
                                    <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small>
                                </div>
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="discount">-{{$disc_percentage}}%</span>
                                    </div>
                                </div>
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
                @php
                    $selling_price = $prod->selling_price;
                    $org_price = $prod->org_price;
                    $disc_price = $org_price-$selling_price;
                    $disc_percentage = round($disc_price/$org_price*100, 2);
                @endphp
                <div class=" item">
                    <div class="card   product headache mb-3">
                        <div class="image-container">
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>

                            <div class="rating justify-content-between  ">
                                <div>
                                    @if ($prod->rate == 4.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>

                                    @elseif($prod->rate == 4)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @elseif ($prod->rate == 3.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @else
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @endif
                                    <span class="rating-number">{{$prod->rate}}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="d-flex flex-column mb-2">
                                    <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small>
                                </div>
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="discount">-{{$disc_percentage}}%</span>
                                    </div>
                                </div>
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
                @php
                    $selling_price = $prod->selling_price;
                    $org_price = $prod->org_price;
                    $disc_price = $org_price-$selling_price;
                    $disc_percentage = round($disc_price/$org_price*100, 2);
                @endphp
                <div class=" item">
                    <div class="card   product headache mb-3">
                        <div class="image-container">
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>

                            <div class="rating justify-content-between  ">
                                <div>
                                    @if ($prod->rate == 4.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>

                                    @elseif($prod->rate == 4)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @elseif ($prod->rate == 3.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @else
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @endif
                                    <span class="rating-number">{{$prod->rate}}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="d-flex flex-column mb-2">
                                    <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small>
                                </div>
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="discount">-{{$disc_percentage}}%</span>
                                    </div>
                                </div>
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
                @php
                    $selling_price = $prod->selling_price;
                    $org_price = $prod->org_price;
                    $disc_price = $org_price-$selling_price;
                    $disc_percentage = round($disc_price/$org_price*100, 2);
                @endphp
                <div class=" item">
                    <div class="card   product headache mb-3">
                        <div class="image-container">
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>

                            <div class="rating justify-content-between  ">
                                <div>
                                    @if ($prod->rate == 4.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>

                                    @elseif($prod->rate == 4)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @elseif ($prod->rate == 3.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @else
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @endif
                                    <span class="rating-number">{{$prod->rate}}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="d-flex flex-column mb-2">
                                    <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small>
                                </div>
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="discount">-{{$disc_percentage}}%</span>
                                    </div>
                                </div>
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
        <h4 class="text-primary mb-2"><a class="" href="{{url('view-category/Refrigerators & Coolers')}}"> Refrigerators & Coolers </a></h4>
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($cooler as $prod)
                @php
                    $selling_price = $prod->selling_price;
                    $org_price = $prod->org_price;
                    $disc_price = $org_price-$selling_price;
                    $disc_percentage = round($disc_price/$org_price*100, 2);
                @endphp
                <div class=" item">
                    <div class="card   product headache mb-3">
                        <div class="image-container">
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                             </a>
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>

                            <div class="rating justify-content-between  ">
                                <div>
                                    @if ($prod->rate == 4.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>

                                    @elseif($prod->rate == 4)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @elseif ($prod->rate == 3.5)
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @else
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa fa-star rating-star"></i>
                                        <i class="fa-regular rating-star fa-star-half-stroke"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                        <i class="fa-regular rating-star fa-star"></i>
                                    @endif
                                    <span class="rating-number">{{$prod->rate}}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="d-flex flex-column mb-2">
                                    <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->org_price}}</small>
                                </div>
                                <div class="first">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="discount">-{{$disc_percentage}}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<a href="#" class="to-top">
    <i class="fas fa-arrow-up"></i>
</a>


<style>

.to-top {
  background: white;
  position: fixed;
  bottom: 16px;
  right:32px;
  width:50px;
  height:50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size:32px;
  color:#1f1f1f;
  text-decoration: none;
  opacity:0;
  pointer-events: none;
  transition: all .4s;
  z-index: 4000;
}

.to-top.active {
  bottom:32px;
  pointer-events: auto;
  opacity:1;
}
</style>

    {{-- @include('layouts.include.productCard') --}}


@endsection


@section('scripts')
<script>

    const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
});
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
