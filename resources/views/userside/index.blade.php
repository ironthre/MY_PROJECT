
@extends('layouts.userside')


@section('title')
    ANDMACK
@endsection

@section('content')
    @include('layouts.include.slider')
    @include('layouts.include.categoryList')
    {{-- Featured Products --}}
    <div class="py-2">
        <div class="container">
            <div class="row">
                <h2 class="text-primary">Featured Products</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $prod)
                        <div class="item">
                            <div class="card border-0" style="height: 250px;" >
                                <div class="card-body">
                                    <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 150px;" class="card-img-top" alt="product image">
                                    <h5 class="">{{$prod->name}}</h5>
                                    <span class="float-start">Tsh {{$prod->selling_price}}</span>
                                    <span class="float-right"> <s>Tsh {{$prod->org_price}}</s> </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Trending Category/Products --}}
    <div class="py-2">
        <div class="container">
            <div class="row">
                <h2 class="text-primary">Hand Bags</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($bags as $bag)
                        <div class="item">
                            <div class="card border-0" style="height: 250px;" >
                                <div class="card-body">
                                    <img src="{{asset('assets/uploads/product/'.$bag->image)}}" style="height: 150px;" class="card-img-top" alt="product image">
                                    <h5 class="">{{$bag->name}}</h5>
                                    <span class="float-start">{{$bag->description}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Mobile phones --}}
    <div class="py-2">
        <div class="container">
            <div class="row">
                <h2 class="text-primary">Featured Products</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $prod)
                        <div class="item">
                            <div class="card border-0" style="height: 250px;" >
                                <div class="card-body">
                                    <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 150px;" class="card-img-top" alt="product image">
                                    <h5 class="">{{$prod->name}}</h5>
                                    <span class="float-start">Tsh {{$prod->selling_price}}</span>
                                    <span class="float-start"> <s>Tsh {{$prod->org_price}}</s> </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


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
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        }
    })

</script>


@endsection
