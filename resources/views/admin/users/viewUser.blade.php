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
            <h6 for=""><span class="opacity-7">Current Role:</span> {{$users->role_as == '2'? 'Super Admin':
                ( $users->role_as == '1'? 'Normal Admin' : 'User')}}</h6>
            <h6 for=""><span class="opacity-7">Full Name:</span>  {{$users->fnam}} {{$users->lname}}</h6>
            <h6 for=""><span class="opacity-7">Email: </span> {{$users->email}}</h6>
            @php
            if (!function_exists('format')) {
                function format($phone_number)
                    {
                        $cleaned = preg_replace('/[^[:digit:]]/', '', $phone_number);
                        preg_match('/(\d{4})(\d{3})(\d{3})/', $cleaned, $matches);
                        return "{$matches[1]}-{$matches[2]}-{$matches[3]}";
                    }
            }
            @endphp
            <h6 for=""><span class="opacity-7">Phone Number1:</span> {{format($users->phone1)}}</h6>
            <h6 for=""><span class="opacity-7">Address One:</span> {{$users->city}}  {{$users->address1}}</h6>
            <h6 for=""><span class="opacity-7">Phone Number2:</span> {{$users->phone2}}</h6>
            <h6 for=""><span class="opacity-7">Address Two:</span> {{$users->address2}}</h6>
        </div>
      <hr class="dark horizontal my-0">
      <div class="card-footer p-3">
        <a href="{{url('all-users')}}" class="btn btn-primary">Back to all Users</a>
      </div>
</div>
@endsection
