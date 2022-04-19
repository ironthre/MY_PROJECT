@extends('layouts.userside')

@section('title')
    My Orders
@endsection

@section('content')
    <div class="container mt-3">
        <nav aria-label="breadcrumb font-weight-bolder">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark font-weight-bolder" href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item text-sm text-dark active font-weight-bolder" aria-current="page">Orders</li>
            </ol>
        </nav>
    </div>
    <div class="container my-2 py-5">
        <div class="row">
            <div class="col-md-6 mx-auto ">
                @foreach ($orders as $item)
                    <div class="card order-card my-3">
                        <div class="card-header order-header">
                            <h6 class="card-title text-md">Order No. {{$item->tracking_no}} <span class="ml-3  "> {{$item->lname}} </span></h6>
                            <h6><span class="text-sm">{{ $item->phone1 }}</span> <span>{{$item->city}}  {{$item->address1}}</span></h6>

                        </div>
                            <h5 class="text-md ml-3 mt-1">Creat Time {{ $item->created_at }} <span class="float-right px-3 py-2 {{ $item->status == '0' ? 'red-bg' : 'green-bg' }}">Status {{ $item->status == '0' ? 'Pending' : 'Completed' }}</span></h5>
                             @foreach ($item->orderitems as $items)
                                <div class="card-body horizontal">
                                    <div class="img-square-wrapper">
                                        <img src="{{asset('assets/uploads/product/'.$items->products->image) }}" width="50px" height="50px" alt="Product Image">
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="text-sm">{{$items->products->name}}</h5>
                                        <h6>x{{$items->qty}}</h6>
                                        <h6>{{$items->price}}Tsh</h6>
                                    </div>
                                </div>
                            @endforeach
                            <h5 class="text-sm ml-3 bolder">Total Price {{ $item->total_price }} <span class="float-right pr-5"><a href="{{url('view-orders/'.$item->id)}}" class="btn btn-primary">Cancle</a></span></h5>
                        <div class="card-footer">

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
