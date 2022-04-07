@extends('layouts.admin')

@section('content')
<div class="col-md-8 mb-xl-0 mb-4 mx-auto">
    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Details for {{ $users->name}}
                </h6>
            </div>
        </div>
        <div class="card-body px-0 mx-3 pb-2 ">
            <h6 for="">Current Role: {{$users->role_as == '2'? 'Super Admin':
                                           ( $users->role_as == '1'? 'Normal Admin' : 'User')}}</h6>
            <h6 for="">Full Name: {{$users->fnam}} {{$users->lname}}</h6>
            <h6 for="">Email: {{$users->email}}</h6>
            <h6 for="">Phone Number1: {{$users->phone1}}</h6>
            <h6 for="">Address One: {{$users->city}}  {{$users->address1}}</h6>
            <h6 for="">Phone Number2: {{$users->phone2}}</h6>
            <h6 for="">Address Two: {{$users->address2}}</h6>
        </div>
      <hr class="dark horizontal my-0">
      <div class="card-footer p-3">
        <a href="{{url('all-users')}}" class="btn btn-primary">Back to all Users</a>
      </div>
</div>
@endsection
