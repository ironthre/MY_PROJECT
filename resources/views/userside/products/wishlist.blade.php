@extends('layouts.userside')

@section('title')
    Wishlist
@endsection

@section('content')
    <div class="container mt-3">
        <nav aria-label="breadcrumb font-weight-bolder">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark " href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item text-sm text-dark active font-weight-bolder" aria-current="page">WishList</li>
            </ol>
        </nav>
    </div>
    <div class="container my-2 py-2">
        @if (Session::has('message_sent'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('status')}}
                </div>
            @endif
        <div class="card  mx-auto col-md-7">
                <div class="card-body wishTable table-responsive">
                     @if ($wish->count() > 0)
                    @foreach ($wish as $item )
                    <table class="table table-borderless">
                        <tbody class="product_data">
                            <tr>
                                <td style="width: 100px"><img src="{{asset('assets/uploads/product/'.$item->products->image)}}"  height="50px" width="50px" alt=""></td>
                                <td style="width: 150px"><p>{{$item->products->name}}</p></td>

                                    <input type="hidden" value="{{$item->prod_id}}" class="prod_id" >
                                    <input type="hidden" value="{{$item->qty}}" class="qty" >
                                <td style="width: 100PX"><p>{{number_format($item->products->selling_price)}}</p></td>
                                <td style="width: 50PX"><button class="btn btn-danger delete-wish-item"><i class="fa fa-trash"></i></button></td>
                                <td ><button class="btn btn-success addToCartBtn" style="width: 130px"><i class="fa fa-shopping-cart"></i>Add to Cart</button></td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- <div class="row  product_data mb-1">
                        <div class="col-md-1">
                            <img src="{{asset('assets/uploads/product/'.$item->products->image)}}"  height="50px" width="50px" alt="">
                        </div>
                        <div class="col-md-2">
                            <p>{{$item->products->name}}</p>
                        </div>
                        <input type="hidden" value="{{$item->prod_id}}" class="prod_id" >
                        <input type="hidden" value="{{$item->qty}}" class="qty" >
                        <div class="col-md-2">
                            <p>{{$item->products->small_description}}</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{number_format($item->products->selling_price)}}</p>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger delete-wish-item"><i class="fa fa-trash"></i></button>
                        </div>
                        <div class="col-md-3 ">
                            <button class="btn btn-success addToCartBtn"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
                        </div>
                    </div> --}}
                    @endforeach
                    @else
                    <div class="card-body text-center">
                        <h4 class="text-warning mx-auto"> <i class="fa fa-2x fa-heart mr-2"></i>Wishlist is Empty</h4>
                        <a href="{{url('/All Products')}}" class="btn btn-danger my-3 mx-auto"><i class="fa fa-heart mr-2"></i>Add Products to Wishlist</a>
                    </div>
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
    $('.incre-btn').click(function(e){
        e.preventDefault();
        var inc_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;

        if(value<100){
            value ++;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }

    });

    $('.decre-btn').click(function(e){
        e.preventDefault();
        var dec_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;

        if(value >1){
            value --;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }

    });

    // $('.delete-wish-item').click(function(e){
    $(document).on('click','.delete-wish-item', function(e){
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "{{ url('/delete-wish-item')}}",
            data: {
                'prod_id': prod_id,
            },
            success: function(response){
                // window.location.reload();
                loadwish();
                 $('.wishTable').load(location.href + " .wishTable");
                swal("",response.status,"warning");

            }
        });


    });

    // $('.addToCartBtn').click(function(e){
    $(document).on('click','.addToCartBtn', function(e){
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.qty').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "{{ url('/add-to-cart')}}",
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
                // 'product_qty': product_qty,
            },
            success: function(response){
                loadcart();
                swal(response.status);

            }
        });

    });

    $('.changeQuantity').click(function(e){
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
                window.location.reload();
            }
        });

    });
</script>
@endsection
