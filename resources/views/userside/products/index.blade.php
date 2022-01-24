@extends('layouts.userside')

@section('title')
    {{$category->name}}
@endsection

@section('content')

    @include('userside.products.mobile')

@endsection
