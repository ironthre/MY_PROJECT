@extends('layouts.userside')

@section('title')
    My Checkout
@endsection

<script src="{{ asset('userside/js/parsley.min.js') }}"></script>

@section('content')
<div class="container">
    <nav aria-label="breadcrumb font-weight-bolder">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark " href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item text-sm text-dark active font-weight-bolder" aria-current="page">Order Product</li>
        </ol>
    </nav>

    <form data-parsley-validate action="{{url('single-order')}}" method="POST" id="checkForm">
        @method('POST')
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <label>Basic Details <span class="text-danger">* Required</span> </label>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6 mb-3">
                                <label for="firstname">First Name <span class="text-danger">*</span></label>
                                <input type="text" id="fnam" class="form-control @error('fnam') is-invalid @enderror" name="fname" value="{{ Auth::user()->fnam}}"
                                 placeholder="Enter first name" required data-parsley-trigger="keyup" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="firstname">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="lname" value="{{ Auth::user()->lname}}"
                                 placeholder="Enter last name" required data-parsley-trigger="keyup" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="firstname">Phone Number1 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="phone1" value="{{ Auth::user()->phone1}}"
                                 placeholder="Mobile Phone" required data-parsley-pattern="[0-9]+$" data-parsley-length="[10,12]" data-parsley-trigger="keyup" autofocus>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="firstname">Phone Number2 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="phone2" value="{{ Auth::user()->phone2}}"
                                 placeholder="Mobile Phone" required data-parsley-pattern="[0-9]+$" data-parsley-length="[10,12]"  data-parsley-trigger="keyup" autofocus>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="firstname">City / Region <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="city" value="{{ Auth::user()->city}}"
                                 placeholder="Enter City" required data-parsley-trigger="keyup" autofocus>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="firstname">Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="address1" value="{{ Auth::user()->address1}}"
                                 placeholder="Enter Address" required data-parsley-trigger="keyup" autofocus>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card">
                    <div class="card-body table-responsive">
                        <label>Order Details</label>
                        <table class="table" style="width:100%">
                            <tbody>
                                <thead>
                                    <th style="width:130px">Product Name</th>
                                    <th style="width:50px">Quantity</th>
                                    <th style="width:80px">Price</th>
                                </thead>
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$qty}}</td>
                                    <td>{{number_format($product->selling_price)}}</td>

                                </tr>

                                {{-- Hidden Input Value for Processing Order --}}
                                <input type="hidden" name="id" value="{{$product->id}}" class="prod_id">
                                <input type="hidden" name="qty" value="{{$qty}}" class="prod_id">
                                <input type="hidden" name="price" value="{{$product->selling_price}}" class="prod_id">

                            </tbody>
                        </table>
                        <hr>
                        <div class="">
                            <label class="font-weight-bold">Mode Of Payment <span class="text-danger">*</span></label> <br>
                            <input type="radio" name="payment" value="Mobile Money" id="mobile" onclick="show1();" required>&nbsp; Mobile Money <br>
                            <p id="details" class="ml-5" style="display: none">Airtel Money Namba ya Kampuni xxxx Kumbukumbu Namba xxxxxxxx</p>
                            <input type="radio" name="payment" id="cash" value="Cash On Derivery" onclick="show2();" required>&nbsp; Cash on Derivery
                        </div>
                            <button type="submit" class="btn btn-primary float-right" >Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

<style>
    .checkout-form label{
        font-weight: 600;
    }

    .checkout-form input{
        font-weight: 500;

    }
    table { width: 100%;height: 100%;border: 3px red double; }
</style>

<script>
    $(function (){
        $('#checkForm').parsley();
    });
    function show2(){
        document.getElementById('details').style.display ='none';
    }
    function show1(){
        document.getElementById('details').style.display ='block';
    }
</script>

