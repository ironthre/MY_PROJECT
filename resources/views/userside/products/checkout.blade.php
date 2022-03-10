@extends('layouts.userside')

@section('title')
    My Checkout
@endsection

@section('content')
<div class="container">
    <nav aria-label="breadcrumb font-weight-bolder">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark " href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item text-sm text-dark active font-weight-bolder" aria-current="page">Order Product</li>
        </ol>
    </nav>

    <form action="{{url('place-order')}}" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Basic Details</h6>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6 mb-3">
                                <label for="firstname">First Name </label>
                                <input type="text" class="form-control" name="fname" value="{{ Auth::user()->fnam}}" placeholder="Enter first name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="firstname">Last Name </label>
                                <input type="text" class="form-control" name="lname" value="{{ Auth::user()->lname}}" placeholder="Enter last name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="firstname">Email Address </label>
                                <input type="email" class="form-control" name="email"   placeholder="Enter first name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="firstname">Phone Number </label>
                                <input type="number" class="form-control" name="phone1" value="{{ Auth::user()->phone1}}" placeholder="Mobile Phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="firstname">City / Region </label>
                                <input type="text" class="form-control" name="city" value="{{ Auth::user()->city}}" placeholder="Enter City">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="firstname">Address </label>
                                <input type="text" class="form-control" name="address1" value="{{ Auth::user()->address1}}" placeholder="Enter Address">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h6>Order Details</h6>
                        <table class="table">
                            <tbody>
                                <thead>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </thead>
                                @foreach ($cartItems as $item)
                                <tr>
                                    <td>{{$item->products->name}}</td>
                                    <td>{{$item->prod_qty}}</td>
                                    <td>{{$item->products->selling_price}}</td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <hr>
                        @if ($cartItems->count() > 0)
                            <button type="submit" class="btn btn-primary float-right" >Place Order</button>
                        @else
                            <h5>No Products</h5>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

<style>
    .checkout-form label{
        font-weight: 600;
    }

    .checkout-form input{
        font-weight: 500;

    }
</style>

