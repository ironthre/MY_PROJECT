@extends('layouts.admin')

<link id="pagestyle" href="{{ asset('css/bootstrap.min.css')}}"  rel="stylesheet" />
<link  href="{{ asset('admin/css/form-style.css')}}"  rel="stylesheet" />
@section('content')
    <div class="card">
         <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Edit Product</h6>
            </div>
        </div>
        <div class="card-body">
            <form data-parsley-validate action="{{url('update-product/'.$product->id)}}" method="POST" id="checkForm" class="inline-form" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-row justify-content-around">
                    <div class="from-group input-groups col-md-3 ">
                        <label for="">Select Category</label>
                            {{-- <select class="form-select"  >
                                <option value="">{{$product->category->name}}</option>
                            </select> --}}
                            <select class="form-select"  name="cate_id">
                                <option value="">Select a Category</option>
                                @foreach ($category as $item)
                                    <option value="{{ $item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="form-group input-groups  col-md-3">
                        <label for="">Name</label>
                        <input type="text" value="{{ $product->name}}" class="form-control" id="" name="name" placeholder="Name">
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
                    <div class="form-group input-groups col-md-5">
                        <label for="">Small Description</label>
                        <textarea class="form-control" id="" name="small_description" rows="3">{{ $product->small_description}}"</textarea>
                    </div>
                    <div class="form-group input-groups col-md-5">
                        <label for="">Product Detaels</label>
                        <textarea class="form-control" id="" name="description" rows="3">{{ $product->description}}"</textarea>
                    </div>
                </div>

                <div class="form-row justify-content-around">
                    <div class="form-group input-groups col-md-2">
                        <label for="">Original Price</label>
                        <input type="text" value="{{ $product->org_price}}" class="form-control" id="" name="org_price" rows="3" data-parsley-pattern="[0-9]+$"  data-parsley-trigger="keyup" autofocus>
                    </div>
                    <div class="form-group input-groups col-md-2">
                        <label for="">Selling Price</label>
                        <input type="text" value="{{ $product->selling_price}}" class="form-control" id="" name="selling_price" rows="3" data-parsley-pattern="[0-9]+$"  data-parsley-trigger="keyup" autofocus>
                    </div>
                    <div class="form-group input-groups col-md-2">
                        <label for="">Quantity</label>
                        <input type="text" value="{{ $product->qty}}" class="form-control" id="" name="qty" placeholder="" data-parsley-pattern="[0-9]+$"  data-parsley-trigger="keyup" autofocus>
                    </div>
                </div>

                 <div class="form-row">

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
<script>
    $(function(){
        $('#checkForm').parsley();
    });
</script>
