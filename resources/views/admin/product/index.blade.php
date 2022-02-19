@extends('layouts.admin')

@section('content')
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Product table</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Name</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Description</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Selling Price</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Stock</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Action</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product as $item )
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                    <div>
                                                        <img src="{{ asset('assets/uploads/product/'.$item->image)}}" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $item->name }}</h6>
                                                    </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0">{{ $item->category->name}}</p>
                                                </td>
                                                <td>
                                                    <span class="text-xs font-weight-bold">{{ $item->description }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-xs font-weight-bold">{{ $item->selling_price }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-xs font-weight-bold">{{ $item->qty }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary mb-0">Edit</a>
                                                    <a href="{{url('delete-product/'.$item->id)}}" class="btn btn-danger mb-0">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
