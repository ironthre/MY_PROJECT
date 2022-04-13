@extends('layouts.admin')

@section('content')
<div class="col-md-8 mb-xl-0 mb-4 mx-auto">
    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Message From {{ $msg->name}}
                </h6>
            </div>
        </div>
        <div class="card-body px-0 mx-3 pb-2 ">
            <h6 for=""><span class="opacity-7">Contact:</span>  {{$msg->phone}}</h6>
            <h6 for=""><span class="opacity-7">Message: </span> {{$msg->message}}</h6>
            <h6 for=""><span class="opacity-7">Date:</span> {{$msg->created_at}}</h6>
        </div>
      <hr class="dark horizontal my-0">
      <div class="card-footer p-3">
        <a href="{{url('delete-msg/'.$msg->id)}}" class="btn btn-primary">delete</a>
      </div>
</div>
@endsection
