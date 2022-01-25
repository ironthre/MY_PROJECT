@extends('layouts.userside')

@section('title')
    {{$category->name}}
@endsection

@section('content')

    <h6>Home > {{$category->name}} </h6>


    <div class="container mt-2">
    <h5 class="text-primary">{{$category->name}}</h5>
        <div class="row">
            @foreach ($product as $prod)
                <div class="col-md-3 item">
                    <div class="card product headache">
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




@endsection
