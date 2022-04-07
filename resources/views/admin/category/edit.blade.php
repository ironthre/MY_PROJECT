@extends('layouts.admin')

<link id="pagestyle" href="{{ asset('css/bootstrap.min.css')}}"  rel="stylesheet" />
<link  href="{{ asset('admin/css/form-style.css')}}"  rel="stylesheet" />
@section('content')
    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Edit Category</h6>
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('update-category/'.$category->id)}}" method="POST" class="inline-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-row justify-content-around">
                    <div class="form-group input-groups  col-md-5">
                            <label for="">Category Name</label>
                            <input type="text" class="form-control" id="" name="name" value="{{$category->name}}" placeholder="Name">
                    </div>

                    <div class="form-group input-groups col-md-5">
                        <label for="">Category Description</label>
                        <textarea class="form-control" id="" name="description" rows="3">{{$category->description}}</textarea>
                    </div>
                </div>

                 <div class="form-row mb-5">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="status" {{$category->status == "1" ? 'checked': ''}} >
                        <label class="form-check-label" for="">
                            Status
                        </label>
                    </div>

                </div>
                @if ($category->image)
                    <img src="{{ asset('assets/uploads/category/'.$category->image)}}" width="250px" alt="">

                @endif

                <div class="col-md-3 mb-2">
                    <input type="file" name="image" class="form-control-file">
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
