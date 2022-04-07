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
                    <h4>My Orders</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Tracking No</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($orders as $item)
                                <tr>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{$item->tracking_no}}</td>
                                    <td>{{$item->total_price}}</td>
                                    <td>{{$item->status == 0 ? 'Pending' : 'completed'}}</td>
                                    <td>
                                        <a href="{{url('view-orders/'.$item->id)}}" class="btn btn-primary">View</a>
                                        <span><a href="{{url('view-orders/'.$item->id)}}" class="btn btn-danger">Cancel</a></span>
                                    </td>
                                </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


@endsection
