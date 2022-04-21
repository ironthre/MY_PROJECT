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
    <div class="container my-2 pb-5">
        <div class="row">
            <div class="col-md-8 mx-auto ">
                @foreach ($orders as $item)
                    <div class="card order-card my-3">
                        <div class="card-header order-header">
                            @php
                            if (!function_exists('format')) {
                                function format($phone_number)
                                    {
                                        $cleaned = preg_replace('/[^[:digit:]]/', '', $phone_number);
                                        preg_match('/(\d{4})(\d{3})(\d{3})/', $cleaned, $matches);
                                        return "{$matches[1]}-{$matches[2]}-{$matches[3]}";
                                    }
                            }
                            @endphp
                            <h6 class="card-title text-md">Order No. {{$item->tracking_no}} <span class="ml-3 text-capitalize ml5"> {{$item->lname}} </span></h6>
                            <h6 class="text-capitalize text-md"><span class="text-md">{{format($item->phone1)}}</span> <span class="ml-5">{{$item->city}}  {{$item->address1}}</span></h6>

                        </div>
                            <h5 class="text-md ml-3 mt-1">Created Time:  {{ date('F d, Y', strtotime($item->created_at)) }} <span class="float-right px-3 py-2 {{ $item->status == '0' ? 'red-bg' : 'green-bg' }}">Status {{ $item->status == '0' ? 'Pending' : 'Completed' }}</span></h5>
                             @foreach ($item->orderitems as $items)
                                <div class="card-body horizontal">
                                    <div class="img-square-wrapper">
                                        <img src="{{asset('assets/uploads/product/'.$items->products->image) }}" width="80px" height="90px" alt="Product Image">
                                    </div>
                                    <div class="ml-3">
                                        <h6 class="text-md">{{$items->products->name}}</h6>
                                        <h6 class="text-md">x{{$items->qty}}</h6>
                                        <h6 class="text-md">{{number_format($items->price)}} Tsh</h6>
                                    </div>
                                </div>
                            @endforeach
                            <h5 class="text-md ml-3 font-weight-bold" onload="comm()">Total Price: {{number_format($item->total_price)}} Tsh <span class="ml-3">Payment: {{$item->pay_method}}</span> <span class="float-right pr-5"><a href="{{url('view-orders/'.$item->id)}}" class="btn btn-primary">Cancel</a></span></h5>
                        <div class="card-footer">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
