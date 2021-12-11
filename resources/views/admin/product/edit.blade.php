@extends('layouts.admin')

<link id="pagestyle" href="{{ asset('css/bootstrap.min.css')}}"  rel="stylesheet" />
<style>
    input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    }

    input[type=textarea], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    }

</style>
@section('content')
    <div class="card">
         <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Edit Product</h6>
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('update-product/'.$product->id)}}" method="POST" class="inline-form" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-row">
                    <div class="from-group col-md-6 ">
                        <label for="">Select Category</label>
                        <select class="form-select"  >
                            <option value="">{{$product->category->name}}</option>
                        </select>
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">Name</label>
                        <input type="text" value="{{ $product->name}}" class="form-control" id="" name="name" placeholder="Name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group  col-md-6">
                            <label for="">Small Description</label>
                            <input type="text" value="{{ $product->small_description}}" class="form-control" id="" name="small_description" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                            <label for="">Slug</label>
                            <input type="text"  value="{{ $product->slug}}" class="form-control" id="" name="slug" placeholder="Slug">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Meta_Title</label>
                        <input type="text" value="{{ $product->meta_title}}" class="form-control" id="" name="meta_title" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Meta_Keyword</label>
                        <input type="text" value="{{ $product->meta_keywords}}" class="form-control" id="" name="meta_keywords" placeholder="">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Meta Description</label>
                        <textarea class="form-control" id="" name="meta_descrip" rows="3">{{ $product->meta_desrip}}"</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Product Description</label>
                        <textarea class="form-control" id="" name="description" rows="3">{{ $product->description}}"</textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Original Price</label>
                        <input type="number" value="{{ $product->org_price}}" class="form-control" id="" name="org_price" rows="3">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Selling Price</label>
                        <input type="number" value="{{ $product->selling_price}}" class="form-control" id="" name="selling_price" rows="3">
                    </div>
                </div>

                 <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Tax</label>
                        <input type="number" value="{{ $product->tax}}" class="form-control" id="" name="tax" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Quantity</label>
                        <input type="number" value="{{ $product->qty}}" class="form-control" id="" name="qty" placeholder="">
                    </div>
                </div>

                 <div class="form-row mb-5">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="status" {{$product->status == "1" ? 'checked': ''}} >
                        <label class="form-check-label" for="">
                            Status
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="trending" {{$product->trending == "1" ? 'checked': ''}}>
                        <label class="form-check-label" for="">
                            Trending
                        </label>
                    </div>
                </div>
                @if ($product->image)
                    <img src="{{ asset('assets/uploads/product/'.$product->image)}}" width="250px" alt="">

                @endif

                <div class="col-md-12 mb-5">
                    <input type="file" name="image" class="form-control-file">
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
