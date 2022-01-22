@extends('layouts.userside')

@section('title')

@endsection

@section('content')
     <div class="py-2">
        <div class="container">
            <div class="row">
                <h2 class="text-primary">{{$category->name}}</h2>
                    @foreach ($product as $prod)
                        <div class="item">
                            <div class="card border-0" style="height: 250px;" >
                                <div class="card-body">
                                    <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 150px;" class="card-img-top" alt="product image">
                                    <h6 class="">{{$prod->name}}</h6>
                                    <span class="float-start">Tsh {{$prod->selling_price}}</span><br>
                                    <small><span class="float-start"> <s>Tsh {{$prod->org_price}}</s> </span></small>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>

@endsection
