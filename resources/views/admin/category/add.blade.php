@extends('layouts.admin')

<link id="pagestyle" href="{{ asset('css/bootstrap.min.css')}}"  rel="stylesheet" />
<link  href="{{ asset('admin/css/form-style.css')}}"  rel="stylesheet" />
@section('content')
    <div class="card">
         <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add Category</h6>
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('insert-category')}}" method="POST" class="inline-form" enctype="multipart/form-data">
                @csrf

                <div class="form-row justify-content-around">
                    <div class="form-group input-groups  col-md-5">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="" name="name" placeholder="">
                    </div>
                    <div class="form-group input-groups col-md-5">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" id="" name="slug" placeholder="">
                    </div>
                </div>

                <div class="form-row justify-content-around">
                    <div class="form-group input-groups col-md-5">
                        <label for="">Meta_Title</label>
                        <input type="text" class="form-control" id="" name="meta_title" placeholder="">
                    </div>
                    <div class="form-group input-groups col-md-5">
                        <label for="">Meta_Keyword</label>
                        <input type="text" class="form-control" id="" name="meta_keyword" placeholder="">
                    </div>
                </div>

                <div class="form-row justify-content-around">
                    <div class="form-group input-groups col-md-5">
                        <label for="">Meta Description</label>
                        <textarea class="form-control" id="" name="meta_desc" rows="3"></textarea>
                    </div>
                    <div class="form-group input-groups col-md-5">
                        <label for="">Product Description</label>
                        <textarea class="form-control" id="" name="description" rows="3"></textarea>
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
                        <input class="form-check-input" type="checkbox" name="popular" >
                        <label class="form-check-label" for="">
                            Popular
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
