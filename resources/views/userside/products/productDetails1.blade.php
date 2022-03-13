@extends('layouts.userside')

@section('title',$product->name)



@section('head')
    <link rel="stylesheet" href="{{ asset('userside/css/product.css')}}">

@endsection

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="container mt-3">
    <!-- product -->
    <nav aria-label="breadcrumb font-weight-bolder">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark " href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark " href="{{url('view-category/'.$product->category->name)}}">{{$product->category->name}}</a></li>
            <li class="breadcrumb-item text-sm text-dark active font-weight-bolder" aria-current="page">{{$product->name}}</li>
          </ol>
    </nav>

    <div class="product-content product-wrap clearfix product-deatil product_data mb-5">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="product-image">
                    <ul>
                        <div class="proImg">
                            <img src="{{asset('assets/uploads/product/'.$product->image)}}" id="nightWork" class="img-fluid pro-img" id="ProductImg" width="400" alt="" />
                        </div>
                        @php
                            $images = explode(",",$product->images);
                            $num = count($images);
                        @endphp
                        <div class="row thumb-img ">
                            <div class="owl-carousel thumb-product owl-theme">
                                <img src="{{asset('assets/uploads/product/'.$product->image)}}" class="img-thumbnail" onclick="document.getElementById('nightWork').src='{{asset('assets/uploads/product/'.$product->image)}}'" width="50px" height="50px" alt="" />

                                @foreach ( $images as $image)
                                    @if ($image)
                                        <img src="{{asset('assets/uploads/multiple/'.$image)}}" class="img-thumbnail" onclick="document.getElementById('nightWork').src='{{asset('assets/uploads/multiple/'.$image)}}'" width="50px" height="50px" alt="" />
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </ul>
                </div>
            </div>


            <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="product-detail-one pl-4 py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="">{{$product->name}}</h4>
                    </div>
                    <div class="rate mb-2">
                        @if ($product->rate == 4.5)
                        <span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
						<span class="fa-regular fa-star-half-stroke"></span>

                        @elseif($product->rate == 4)
                        <span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa-regular fa-star"></span>
                        @elseif ($product->rate == 3.5)
                        <span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa-regular fa-star-half-stroke"></span>
						<span class="fa-regular fa-star"></span>
                        @else
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa-regular fa-star-half-stroke"></span>
						<span class="fa-regular fa-star"></span>
                        <span class="fa-regular fa-star"></span>

                        @endif

                    </div>
                    <h5><i class="fa-solid fa-truck-fast mr-2"></i><span>Free Delivery in Dodoma</span></h5>
                </div>

                <hr />
                <div class="product-detail-two pl-4">
                    <div class="d-flex flex-row mb-2">
                        <h5>Price:</h5>
                        <span class="new-prices text-danger mx-3">Tsh {{$product->selling_price}}</span>
                        <span class="old-prices text-danger bold">Tsh {{$product->org_price}}</span>
                    </div>
                    <form action="{{url('single-checkout')}}" method="POST">
                        {{ csrf_field() }}
                    <div class="row input-group pl-3 mb-3">
                        <input type="hidden" name="id" value="{{$product->id}}" class="prod_id">
                        <h5>Quantity:</h5>
                        <div class="input-group mx-3 text-center " style="width: 130px;">
                            <div class="input-group-prepend">
                                <button class="input-group-text decre-btn">-</button>
                            </div>
                            <input type="text" class="form-control text-center qty-input" name="quantity" value="1">
                            <div class="input-group-append">
                                <button class="input-group-text incre-btn">+</button>
                            </div>
                        </div>
                    </div>

                </div>
                <hr />

                <div class="description description-tabs pl-4">
                    <h5 class=" pl-4">Product Description</h5>
                    <p class="pl-4">{{$product->small_description}}</p>
                    <p class="pl-4">{{$product->description}}</p>
                </div>
                <hr />
                <div class="product-detail-three pl-4">
                    <div class="stock">
                        @if ($product->qty>0)
                            <button for="" class="baddge btn-success mb-3 ml-4">In Stock</button>
                        @else
                            <button for="" class="baddge btn-warning mb-3 ml-4">Out 0f Stock</button>
                        @endif
                    </div>
                     <div class="col-md-12 mb-2">
                            <a class="btn btn-white btn-outline-primary " href="{{url('contact')}}"><i class="fa fa-envelope"></i> Contact Seller</a>
                            <button class="btn btn-white btn-outline-danger addToWishlist"><i class="fa-solid fa-heart"></i>Wishlist</button>
                     </div>
                    <div class="col-md-12">
                        @if ($product->qty>0)
                            <button class="btn btn-white btn-primary addToCartBtn"><i class="fa-solid fa-cart-plus"></i> Add to Cart</button>
                           <button type="submit" class="btn btn-primary">Order Product</button>
                        @endif

                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4>Related Product</h4>

    <div class="row">
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($related as $prod)
                @php
                    $selling_price = $prod->selling_price;
                    $org_price = $prod->org_price;
                    $disc_price = $org_price-$selling_price;
                    $disc_percentage = $disc_price/100;
                @endphp
                <div class="col-md-3 item">
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


    <h4>You May also like this</h4>
    <div class="row">
        <div class="owl-carousel featured-carousel my-3 owl-theme">
            @foreach ($popular as $prod)
                @php
                    $selling_price = $prod->selling_price;
                    $org_price = $prod->org_price;
                    $disc_price = $org_price-$selling_price;
                    $disc_percentage = $disc_price/100;
                @endphp
                <div class="col-md-3 item">
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


    <!-- end product -->
</div>
<link rel="stylesheet" href="{{asset('userside/css/hide-menu.css')}}">
<link rel="stylesheet" href="{{asset('userside/css/product-details.css')}}">

@endsection

@section('scripts')
<script>

    $('.featured-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText: ["<i class='fa fa-chevron-left' style='color:white'></i>","<i class='fa fa-chevron-right' style='color:white'></i>"],
        dots:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            800:{
                items:4
            },
            1000:{
                items:5
            }
        }
    })

    $('.thumb-product').owlCarousel({
        loop:false,
        nav:true,
        navText: ["<i class='fa  fa-chevron-left' style='color:white'></i>","<i class='fa  fa-chevron-right' style='color:white'></i>"],
        dots:false,
        responsive:{
            0:{
                items:4
            },
            600:{
                items:4
            },

            1000:{
                items:4
            }
        }
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

    $('.addToCartBtn').click(function(e){
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.qty-input').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "{{ url('/add-to-cart')}}",
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
            },
            success: function(response){
                loadcart();
                swal(response.status);

            }
        });

    });
     $('.singleOrder').click(function(e){
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.qty-input').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "{{ url('/single-checkout')}}",
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
            },
            success: function(response){
                swal(response.status);

            }
        });

    });

    $('.addToWishlist').click(function(e){
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "{{ url('/add-to-wishlist')}}",
            data: {
                'product_id': product_id,
            },
            success: function(response){
                loadwish();
                swal(response.status);

            }
        });

    });

    $('.incre-btn').click(function(e){
        e.preventDefault();
        var inc_value = $('.qty-input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;

        if(value<100){
            value ++;
            $('.qty-input').val(value);
        }

    });

    $('.decre-btn').click(function(e){
        e.preventDefault();
        var dec_value = $('.qty-input').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;

        if(value >1){
            value --;
            $('.qty-input').val(value);
        }

    });




</script>



@endsection
