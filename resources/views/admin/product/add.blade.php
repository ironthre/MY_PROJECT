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
                <h6 class="text-white text-capitalize ps-3">Add Product</h6>
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('insert-product')}}" method="POST" class="inline-form" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="from-group col-md-6 ">
                        <label for="">Select Category</label>
                        <select class="form-select"  name="cate_id">
                            <option value="">Select a Category</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="" name="name" placeholder="Name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group  col-md-6">
                            <label for="">Small Description</label>
                            <input type="text" class="form-control" id="" name="small_description" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" id="" name="slug" placeholder="Slug">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Meta_Title</label>
                        <input type="text" class="form-control" id="" name="meta_title" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Meta_Keyword</label>
                        <input type="text" class="form-control" id="" name="meta_keywords" placeholder="">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Meta Description</label>
                        <textarea class="form-control" id="" name="meta_descrip" rows="3"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Product Description</label>
                        <textarea class="form-control" id="" name="description" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Original Price</label>
                        <input type="number" class="form-control" id="" name="org_price" rows="3">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Selling Price</label>
                        <input type="number" class="form-control" id="" name="selling_price" rows="3">
                    </div>
                </div>

                 <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Tax</label>
                        <input type="number" class="form-control" id="" name="tax" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
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
