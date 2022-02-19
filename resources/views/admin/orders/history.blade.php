@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Completed Orders

                </h6>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <a href="{{url('all-orders')}}" class="float-end m-3 btn btn-primary">view all</a>
                <a href="{{url('/orders')}}" class="float-end m-3 btn btn-primary">New Order</a>
                <thead>
                    <tr>
                        <th>Order Date</th>
                        <th>Tracking No</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $item)
                        <tr>
                            <td>{{ date('d-m-Y'), strtotime($item->created_at)}}</td>
                            <td>{{$item->tracking_no}}</td>
                            <td>{{$item->total_price}}</td>
                            <td>{{$item->status == 0 ? 'Pending' : 'completed'}}</td>
                            <td>
                                <a href="{{url('admin/view-orders/'.$item->id)}}" class="btn btn-primary">order details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
