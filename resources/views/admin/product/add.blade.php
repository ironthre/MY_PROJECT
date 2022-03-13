@extends('layouts.admin')

<link id="pagestyle" href="{{ asset('css/bootstrap.min.css')}}"  rel="stylesheet" />
<link  href="{{ asset('admin/css/form-style.css')}}"  rel="stylesheet" />
@section('content')
    <div class="card">
         <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add Product</h6>
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('insert-product')}}" method="POST" class="inline-form" enctype="multipart/form-data">
                @csrf
                <div class="form-row justify-content-around">
                    <div class="form-group input-groups col-md-3 ">
                        <label for="">Select Category</label>
                        <select class="form-select"  name="cate_id">
                            <option value="">Select a Category</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group input-groups  col-md-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="" name="name" placeholder="">
                    </div>
                    <div class="form-group input-groups col-md-3">
                        <label for="">Rate Product</label>
                            <select class="form-select"  name="rate">
                                <option value="{{4.5}}">High 4.5</option>
                                <option value="{{4.0}}">Medium 4</option>
                                <option value="{{3.5}}">Low 3.5</option>
                                <option value="{{2.5}}">Lowest 2.8</option>
                            </select>
                    </div>
                </div>


                <div class="form-row justify-content-around">
                    <div class="form-group input-groups  col-md-5">
                            <label for="">Small Description</label>
                            <input type="text" class="form-control" id="" name="small_description" placeholder="">
                    </div>
                    <div class="form-group input-groups col-md-5">
                        <label for="">Product Deteals</label>
                        <textarea class="form-control text-area" id="" name="description" rows="5"></textarea>
                    </div>
                </div>

                <div class="form-row justify-content-around">
                    <div class="form-group input-groups col-md-3">
                        <label for="">Original Price</label>
                        <input type="number" class="form-control" id="" name="org_price" rows="3">
                    </div>
                    <div class="form-group input-groups col-md-3">
                        <label for="">Selling Price</label>
                        <input type="number" class="form-control" id="" name="selling_price" rows="3">
                    </div>
                    <div class="form-group input-groups col-md-2">
                        <label for="">Tax</label>
                        <input type="number" class="form-control" id="" name="tax" placeholder="">
                    </div>
                    <div class="form-group input-groups col-md-2">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control" id="" name="qty" placeholder="">
                    </div>
                </div>

                 <div class="form-row mb-5">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="status" >
                        <label class="form-check-label" for="">
                            Status
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="trending" >
                        <label class="form-check-label" for="">
                            Trending
                        </label>
                    </div>
                </div>
                Product Image
                <div class="col-md-12 mb-5">
                    <input type="file" name="image" class="form-control-file">
                </div>

                Other Multiple Image ( Ctr + Selected images)
                <div class="col-md-12 mb-5">
                    <input type="file" name="images[]" class="form-control-file" multiple>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
