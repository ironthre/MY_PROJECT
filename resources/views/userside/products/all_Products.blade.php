@extends('layouts.userside')

@section('title')
    All Products
@endsection

@section('content')
    <div class="container PY-2 ">
        <nav aria-label="breadcrumb font-weight-bolder">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark " href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item text-sm text-dark active font-weight-bolder" aria-current="page">Products</li>
          </ol>
        </nav>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-5 justify-content-center">
            @foreach ($all_products as $prod)
                @php
                    $selling_price = $prod->selling_price;
                    $org_price = $prod->org_price;
                    $disc_price = $org_price-$selling_price;
                    $disc_percentage = round($disc_price/$org_price*100, 2);
                @endphp
                <div class="">
                    <div class="card   product headache mb-3 mx-3">
                        <div class="image-container">
                             <a href="{{url('Product-Details/'.$prod->name)}}">
                                <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;width: 190px;" class="img-fluid rounded thumbnail-image">
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
                                    <span class="new-price">Tsh {{number_format($prod->selling_price)}}</span> <small class="old-price text-right float-right">Tsh {{number_format($prod->org_price)}}</small>
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
 <link rel="stylesheet" href="{{ asset('userside/css/hide-menu.css')}}">
@endsection
