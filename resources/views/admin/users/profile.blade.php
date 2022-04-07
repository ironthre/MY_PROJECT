@extends('layouts.admin')

@section('content')
<div class="row col-md-12 mb-xl-0 mb-4 mx-auto">
    <div class="card col-md-4 mb-4 mx-2">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Dear!  {{ $user->name}}
                </h6>
            </div>
        </div>
        <div class="card-body px-0  pb-2 ">
            <h6 for=""><span class="opacity-7">Current Role:</span> {{$user->role_as == '2'? 'Super Admin':
                                           ( $user->role_as == '1'? 'Normal Admin' : 'User')}}</h6>
            <h6 for=""><span class="opacity-7">Full Name:</span>  {{$user->fnam}} {{$user->lname}}</h6>
            <h6 for=""><span class="opacity-7">Email: </span> {{$user->email}}</h6>
            <h6 for=""><span class="opacity-7">Phone Number1:</span> {{$user->phone1}}</h6>
            <h6 for=""><span class="opacity-7">Address One:</span> {{$user->city}}  {{$user->address1}}</h6>
            <h6 for=""><span class="opacity-7">Phone Number2:</span> {{$user->phone2}}</h6>
            <h6 for=""><span class="opacity-7">Address Two:</span> {{$user->address2}}</h6>
        </div>
      <hr class="dark horizontal my-0">
      <div class="card-footer p-3">
        <a href="{{url('all-users')}}" class="btn btn-primary">Back to all Users</a>
      </div>
    </div>
    <div class="card col-md-7 mb-4">
        <form data-parsley-validate action="{{url('update-profile')}}" id="checkForm" method="post">
            {{ csrf_field() }}
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-secondary shadow-secondary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Edit Details for {{ $user->name}}<span class="text-danger"> * </span>
                    </h6>
                </div>
            </div>
            <div class="row checkout-form">
                <div class="col-md-6 mb-3">
                    <label for="firstname">First Name </label>
                    <input type="text" id="name" class=" @error('name') is-invalid @enderror" name="fname" value="{{ Auth::user()->fnam}}"
                     placeholder="Enter first name"  data-parsley-trigger="keyup" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="firstname">Last Name </label>
                    <input type="text" class=" @error('name') is-invalid @enderror" name="lname" value="{{ Auth::user()->lname}}"
                     placeholder="Enter last name"  data-parsley-trigger="keyup" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="firstname">Phone Number1 </label>
                    <input type="text" class="" name="phone1" value="{{ Auth::user()->phone1}}"
                     placeholder="Mobile Phone"  data-parsley-pattern="[0-9]+$" data-parsley-length="[10,12]" data-parsley-trigger="keyup" autofocus>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="firstname">Phone Number2 </label>
                    <input type="text" class="" name="phone2" value="{{ Auth::user()->phone2}}"
                     placeholder="Mobile Phone"  data-parsley-pattern="[0-9]+$" data-parsley-length="[10,12]" data-parsley-pattern="[0-9]+$" data-parsley-trigger="keyup" autofocus>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="firstname">Address / Locatio </label>
                    <input type="text" class="" name="address1" value="{{ Auth::user()->address1}}"
                     placeholder="Enter Address"  data-parsley-trigger="keyup" autofocus>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="firstname">Active Email </label>
                    <input type="email" class="" name="email" value="{{ Auth::user()->email}}"
                     placeholder="Email"  data-parsley-trigger="keyup" autofocus>
                </div>
            </div>
            <div class="card-footer p-3">
                <button type="submit" class="btn btn-secondary float-right" >update profile</button>
            </div>
        </form>
    </div>
</div>
@endsection
