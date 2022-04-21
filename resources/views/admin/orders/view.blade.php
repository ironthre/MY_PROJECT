@extends('layouts.admin')

@section('content')
<div class="row">
            <div class="col-md-12">
                <div class="card-header mb-2">
                    <h4>View Order
                        <a href="{{url('all-orders')}}" class="btn float-end btn-primary">Back to all Orders</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-3">Order Details

                                    </h4>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Status</th>
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
                                                    <td>{{number_format($item->price)}}</td>
                                                    <td class="text-white text-uppercase {{$orders->status==0?'bg-dark':'bg-success'}}">{{$orders->status == 0 ? 'Pending': 'Completed'}}</td>
                                                    {{-- <td>{{$item->status == 0 ? 'Pending' : 'completed'}}</td> --}}
                                                </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <h4 class="text-danger">Total Price: Tsh {{number_format($orders->total_price)}}</h4>
                                    <div class="mt-3 my-4">
                                        <form action="{{url('update-order/'.$orders->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <h6 for=""> Update Status Order</h6>
                                            <select name="order_status" id="" style="width: 190px" class="form-select px-3 mb-3 pl-4  ml-3">
                                                <option {{$orders->status == '0'? 'selected': ''}} value="0">Pending</option>
                                                <option {{$orders->status == '1'? 'selected': ''}}  value="1">Completed</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-hearder">
                                    <h4 class="m-3">Delivery Address</h4>
                                </div>
                                <div class="card-body">
                                    <h6 for=""><span class="opacity-7">First Name:</span> {{$orders->fname}}</h6><br>
                                    <h6 for=""><span class="opacity-7">Last Name:</span> {{$orders->lname}}</h6><br>
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
                                    <h6 for=""><span class="opacity-7">Phone Number:</span> {{format($orders->phone1)}}</h6><br>
                                    <h6 for=""><span class="opacity-7">Address:</span> {{$orders->city}}  {{$orders->address1}}</h6>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>

@endsection
