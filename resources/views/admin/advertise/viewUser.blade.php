@extends('admin.advertise.advertise')
@section('content')
<div class="col-md-8 mb-xl-0 mb-4 mx-auto">
    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Details for {{ $user->name}}
                </h6>
            </div>
        </div>
        <div class="card-body px-0 mx-3 pb-2 ">
            <h6 for=""><span class="opacity-7">Current Role:</span> {{$user->role_as == '2'? 'Super Admin':
                                           ( $user->role_as == '1'? 'Normal Admin' : 'User')}}</h6>
            <h6 for=""><span class="opacity-7">Full Name:</span> {{$user->fnam}} {{$user->lname}}</h6>
            <h6 for=""><span class="opacity-7">Email:</span> {{$user->email}}</h6>
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
            <h6 for=""><span class="opacity-7">Phone Number:</span> {{format($user->phone1)}}</h6>
            <h6 for=""><span class="opacity-7">Address One:</span> {{$user->city}}  {{$user->address1}}</h6>
            <h6 for=""><span class="opacity-7">Phone Number2:</span> {{$user->phone2}}</h6>
            <h6 for=""><span class="opacity-7">Address Two:</span> {{$user->address2}}</h6>
        </div>
      <hr class="dark horizontal my-0">
      <div class="card-footer p-3">
        <a href="{{url('user-access')}}" class="btn btn-primary">Back to all Users</a>
        <a href="{{url('user-update/'.$user->id)}}" class="btn btn-primary">Edit Role</a>
      </div>
</div>
@endsection
