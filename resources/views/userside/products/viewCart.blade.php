@extends('layouts.userside')

@section('title')
    My Cart
@endsection

@section('content')
    <div class="container mt-3">
        <nav aria-label="breadcrumb font-weight-bolder">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark " href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item text-sm text-dark active font-weight-bold" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>
    <div class="container my-2 py-4 mx-auto">
        <div class="card col-md-7 mx-auto">
                <div class="card-body cartTable table-responsive">
                    @if ($cartItems->count() > 0)
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($cartItems as $item )
                    <table class="table table-borderless">
                        <tbody class="product_data">
                            <tr>
                                <td><img src="{{asset('assets/uploads/product/'.$item->products->image)}}"  height="50px" width="50px" alt=""></td>
                                <td><p>{{$item->products->name}}</p></td>
                                <td><p>{{number_format($item->products->selling_price)}}</p></td>
                                <td>
                                    <input type="hidden" value="{{$item->prod_id}}" class="prod_id" >
                                    @if ($item->products->qty >= $item->prod_qty)
                                        <div class="input-group text-center " style="width: 130px;">
                                            <div class="input-group-prepend">
                                                <button class="input-group-text changeQuantity decre-btn">-</button>
                                            </div>
                                            <input type="text" class="form-control text-center qty-input" name="quantity " value="{{$item->prod_qty}}">
                                            <div class="input-group-append">
                                                <button class="input-group-text changeQuantity incre-btn">+</button>
                                            </div>
                                        </div>
                                        @php
                                            $total += $item->products->selling_price*$item->prod_qty;
                                        @endphp
                                    @else
                                        <p>Out of Stock</p>
                                    @endif
                                </td>
                                <td><button class="btn btn-danger delete-cart-item"><i class="fa fa-trash"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
                    <div class="card-footer">
                        <p style="width: 400px">Total Price: Tsh {{number_format($total)}} </p>
                        <p><a href="{{url('checkout')}}" class="btn btn-primary ">Place Order</a></p>

                    </div>
                </div>

            @else
                <div class="card-body text-center">
                    <h4 class="text-warning"> <i class="fa fa-2x fa-shopping-cart mr-2"></i>Cart is Empty</h4>
                    <a href="{{url('/All Products')}}" class="btn btn-success my-3"><i class="fa  fa-shopping-cart mr-2"></i>Add Products to Cart</a>
                </div>
            @endif
        </div>
    </div>


@endsection

@section('scripts')
<script>
    loadcart();
    loadwish();

    function loadcart(){
        $.ajax({
            method: "GET",
            url: "{{ url('/load-cart-data')}}",
            success: function(response){
                $('.cart-count').html();
                $('.cart-count').html(response.count);
            }
        });
    }

    function loadwish(){
        $.ajax({
            method: "GET",
            url: "{{ url('/load-wish-data')}}",
            success: function(response){
                $('.wishlist-count').html();
                $('.wishlist-count').html(response.wish);
            }
        });
    }
    // $('.incre-btn').click(function(e){
    $(document).on('click','.incre-btn', function(e){
        e.preventDefault();
        var inc_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;

        if(value<100){
            value ++;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }

    });

    $(document).on('click','.decre-btn', function(e){
        e.preventDefault();
        var dec_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;

        if(value >1){
            value --;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }

    });

    $(document).on('click','.delete-cart-item', function(e){
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "{{ url('/delete-cart-item')}}",
            data: {
                'prod_id': prod_id,
            },
            success: function(response){
                loadcart();
                $('.cartTable').load(location.href + " .cartTable");
                swal("",response.status,"warning");

            }
        });


    });

    $(document).on('click','.changeQuantity', function(e){
        e.preventDefault(e);
        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var qty =  $(this).closest('.product_data').find('.qty-input').val();

        data = {
            'prod_id': prod_id,
            'prod_qty': qty,
        },

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "{{ url('/update-cart-item')}}",
            data: data,
            success: function(response){
                $('.cartTable').load(location.href + " .cartTable");
            }
        });

    });
</script>
@endsection
