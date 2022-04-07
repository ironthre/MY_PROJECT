@extends('layouts.admin')

<link id="pagestyle" href="{{ asset('css/bootstrap.min.css')}}"  rel="stylesheet" />
<link  href="{{ asset('admin/css/form-style.css')}}"  rel="stylesheet" />
@section('content')
    <div class="card">
         <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add Category * Required</h6>
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('insert-category')}}" data-parsley-validate id="checkForm" method="POST" class="inline-form" enctype="multipart/form-data">
                @csrf

                <div class="form-row justify-content-around">
                    <div class="form-group input-groups  col-md-5">
                            <label for="">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="" name="name" placeholder="" required  data-parsley-trigger="keyup" autofocus>
                    </div>
                    <div class="form-group input-groups col-md-5">
                            <label for="">Slug<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="" name="slug" placeholder="" required  data-parsley-trigger="keyup" autofocus>
                    </div>
                </div>

                <div class="form-row justify-content-around">
                    <div class="form-group input-groups col-md-5">
                        <label for="">Meta_Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="" name="meta_title" placeholder="" required  data-parsley-trigger="keyup" autofocus>
                    </div>
                    <div class="form-group input-groups col-md-5">
                        <label for="">Meta_Keyword <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="" name="meta_keyword" placeholder="" required  data-parsley-trigger="keyup" autofocus>
                    </div>
                </div>

                <div class="form-row justify-content-around">
                    <div class="form-group input-groups col-md-5">
                        <label for="">Meta Description <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="" name="meta_desc" rows="3" required  data-parsley-trigger="keyup" autofocus></textarea>
                    </div>
                    <div class="form-group input-groups col-md-5">
                        <label for="">Product Description <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="" name="description" rows="3" required  data-parsley-trigger="keyup" autofocus ></textarea>
                    </div>
                </div>

                 <div class="form-row mb-5">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="status" required  data-parsley-trigger="keyup" autofocus>
                        <label class="form-check-label" for=""><span class="text-danger">*</span>
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
                    <input type="file" name="image" class="form-control-file" required  data-parsley-trigger="keyup" autofocus>
                </div>



                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
<script>
    $(function(){
        $('#checkForm').parsley();
    });
</script>
