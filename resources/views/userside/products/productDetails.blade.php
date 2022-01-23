@extends('layouts.userside')

@section('title', $product->name)



@section('content')
    <h6>{{$product->name}}</h6>
    <img src="{{asset('assets/uploads/product/'.$product->image)}}" alt="">

@endsection
