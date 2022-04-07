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
            <div class="col-md-12">
                <div class="card-header">
                    <h4>View Order
                        <a href="{{url('my-orders')}}" class="btn float-right btn-primary">Back to Orders</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-3">Order Details</h4>

                                </div>

                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>

                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($orders->orderitems as $item)
                                                <tr>
                                                    <td>
                                                        <img src="{{asset('assets/uploads/product/'.$item->products->image) }}" width="50px" height="50px" alt="Product Image">
                                                        {{$item->products->name}}
                                                    </td>
                                                    <td>{{$item->qty}}</td>
                                                    <td>{{$item->price}}</td>
                                                </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <h4 class="text-danger">Total Price: Tsh {{$orders->total_price}}</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h4 class="mb-3">Delivery Address</h4>
                            <label for="">First Name: {{$orders->fname}}</label><br>
                            <label for="">Last Name: {{$orders->lname}}</label><br>

                            <label for="">Phone Number: {{$orders->phone1}}</label><br>

                            <label for="">Address: {{$orders->city}}  {{$orders->address1}}</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
