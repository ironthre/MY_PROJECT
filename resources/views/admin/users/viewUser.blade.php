@extends('layouts.admin')

@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ $users->name}} Details
                            </h6>
                        </div>
                    </div>
                    <div class="card-body px-0 mx-3 pb-2">
                        <h6 for="">Role: {{$users->role_as == '0'? 'System User' : 'System Admin'}}</h6>
                        <h6 for="">Full Name: {{$users->fnam}} {{$users->lname}}</h6>
                        <h6 for="">Email: {{$users->email}}</h6>
                        <h6 for="">Phone Number1: {{$users->phone1}}</h6>
                        <h6 for="">Address One: {{$users->city}}  {{$users->address1}}</h6>
                        <h6 for="">Phone Number2: {{$users->phone2}}</h6>
                        <h6 for="">Address Two: {{$users->address2}}</h6>
                        <a href="{{url('all-users')}}" class="btn btn-primary float-end">Back to all Users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
