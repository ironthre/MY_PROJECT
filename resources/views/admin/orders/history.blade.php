@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-1 z-index-2">
            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Completed Orders

                </h6>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <a href="{{url('all-orders')}}" class="float-end m-1 btn btn-primary">view all</a>
                <a href="{{url('/orders')}}" class="float-end m-1 btn btn-dark">New / Pending Order</a>
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
                            <td>{{number_format($item->total_price)}}</td>
                            <td class="text-white text-uppercase {{$item->status==0?'bg-dark':'bg-success'}}">{{$item->status == 0 ? 'Pending': 'Completed'}}</td>
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
