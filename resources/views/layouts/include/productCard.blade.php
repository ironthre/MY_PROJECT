<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('userside/css/login.css')}}">
    <link href="{{ asset('userside/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('userside/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('userside/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('userside/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('userside/css/all.css')}}">
    <style>
        body {
    background-color: #eee;
}

/* .container {
    width: 900px;
} */

.card {
    background-color: #fff;
    border: none;
    border-radius: 10px;
    width: 190px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.image-container {
    position: relative;
}

.thumbnail-image {
    border-radius: 10px !important;
}

.discount {
    background-color: red;
    padding-top: 1px;
    padding-bottom: 1px;
    padding-left: 4px;
    padding-right: 4px;
    font-size: 10px;
    border-radius: 6px;
    color: #fff;
}

.wishlist1 {
    height: 25px;
    width: 25px;
    background-color: #eee;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.first {
    position: absolute;
    width: 100%;
    padding: 9px;
}

.dress-name {
    font-size: 13px;
    font-weight: bold;
    width: 75%;
}

.new-price {
    font-size: 13px;
    font-weight: bold;
    color: red;
}

.old-price {
    font-size: 8px;
    font-weight: bold;
    color: grey;
}

/* .btn {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    padding: 3px;
    https://bbbootstrap.com/snippets/bootstrap-product-detail-window-template-82185599#
} */

.creme {
    background-color: #fff;
    border: 2px solid grey;
}

.creme:hover {
    border: 3px solid grey;
}

.creme:focus {
    background-color: grey;
}

.red {
    background-color: #fff;
    border: 2px solid red;
}

.red:hover {
    border: 3px solid red;
}

.red:focus {
    background-color: red;
}

.blue {
    background-color: #fff;
    border: 2px solid #40c4ff;
}

.blue:hover {
    border: 3px solid #40c4ff;
}

.blue:focus {
    background-color: #40c4ff;
}

.darkblue {
    background-color: #fff;
    border: 2px solid #01579b;
}

.darkblue:hover {
    border: 3px solid #01579b;
}

.darkblue:focus {
    background-color: #01579b;
}

.yellow {
    background-color: #fff;
    border: 2px solid #ffca28;
}

.yellow:hover {
    border-radius: 3px solid #ffca28;
}

.yellow:focus {
    background-color: #ffca28;
}

.item-size {
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: #fff;
    border: 1px solid grey;
    color: grey;
    font-size: 10px;
    text-align: center;
    align-items: center;
    display: flex;
    justify-content: center;
}

.rating-star {
    font-size: 10px !important;
}

.rating-number {
    font-size: 10px;
    color: grey;
}

.buy {
    font-size: 12px;
    color: purple;
    font-weight: 500;
}

.voutchers {
    background-color: #fff;
    border: none;
    border-radius: 10px;
    width: 190px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    overflow: hidden;
}

.voutcher-divider {
    display: flex;
}

.voutcher-left {
    width: 60%;
}

.voutcher-name {
    color: grey;
    font-size: 9px;
    font-weight: 500;
}

.voutcher-code {
    color: red;
    font-size: 11px;
    font-weight: bold;
}

.voutcher-right {
    width: 40%;
    background-color: purple;
    color: #fff;
}

.discount-percent {
    font-size: 12px;
    font-weight: bold;
    position: relative;
    top: 5px;
}

.off {
    font-size: 14px;
    position: relative;
    bottom: 5px;
}

    </style>

</head>
<body>
<div class="container mt-2">
    <div class="row">
        <h4 class="text-primary">Testing Products</h4>
        <div class="owl-carousel featured-carousel owl-theme">
            @foreach ($featured_products as $prod)
                <div class="col-md-3 item">
                    <div class="card product">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center"> <span class="discount">-25%</span> <span class="wishlist1"><i class="far fa-heart "></i></span> </div>
                            </div> <img src="{{asset('assets/uploads/product/'.$prod->image)}}" style="height: 180px;" class="img-fluid rounded thumbnail-image">
                        </div>
                        <div class="product-detail-container p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="dress-name"><a href="{{url('Product-Details/'.$prod->name)}}">{{$prod->name}}</a></h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div class="d-flex flex-column mb-2"> <span class="new-price">Tsh {{$prod->selling_price}}</span> <small class="old-price text-right float-right">Tsh {{$prod->selling_price}}</small> </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <div> <i class="fa fa-star rating-star"></i> <span class="rating-number">4.8</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

 <script src="{{ asset('userside/js/jquery.min.js')}}"></script>
    <script src="{{ asset('userside/js/owl.carousel.min.js')}}"></script>
     <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <script src="{{ asset('userside/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('userside/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('userside/js/all.js')}}"></script>
     <!-- Custom Script -->
  <script  src="js/script.js"></script>


</body>
</html>