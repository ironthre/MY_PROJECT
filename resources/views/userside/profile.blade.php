@extends('layouts.userside')


@section('title')
    Profile
@endsection

@section('content')

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container pt-3">
    <div class="row flex-lg-nowrap">
    <div class="col">
        <div class="row">
        <div class="col mb-3">
            <div class="card">
            <div class="card-body">
                <div class="e-profile">
                <div class="row">
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap text-capitalize font-weight-bold">{{$user->username}}</h4>
                        @php
                            function format($phone_number)
                                {
                                    $cleaned = preg_replace('/[^[:digit:]]/', '', $phone_number);
                                    preg_match('/(\d{4})(\d{3})(\d{3})/', $cleaned, $matches);
                                    return "{$matches[1]}-{$matches[2]}-{$matches[3]}";
                                }
                        @endphp
                        <p class="mb-0">{{format($user->phone1)}}</p>
                    </div>
                    <div class="text-center text-sm-right">
                        {{-- <span class="badge badge-secondary">administrator</span> --}}
                        <div class="text-muted"><small>Joined {{date('F d, Y', strtotime($user->created_at))}}</small></div>
                    </div>
                    </div>
                </div>
                <hr>
                <ul class="nav nav-tabs" role="tablist" id="nav-tab">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#edit-profile">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#change-password">Change Password</a>
                    </li>
                </ul>
                <div class="tab-content pt-3">
                    <div class="tab-pane active" id="edit-profile">
                        <form class="form" data-parsley-validate id="checkForm" action="{{url('user-update')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="username" placeholder="" value="{{$user->username}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" type="text" name="phone1" placeholder="" value="{{$user->phone1}}" data-parsley-pattern="[0-9]+$" data-parsley-length="[10,12]" data-parsley-trigger="keyup" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="email" placeholder="usermail@gmail.com" value="{{$user->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for=""><b>Derivery Address</b></label>
                                    <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" name="fnam" placeholder="" value="{{$user->fnam}}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" name="lname" placeholder="" value="{{$user->lname}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                        <label>City / Region</label>
                                        <input class="form-control" type="text" name="city" placeholder="" value="{{$user->city}}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" type="text" name="address1" placeholder="" value="{{$user->address1}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                            </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="change-password">
                        <form data-parsley-validate id="checkForm" action="{{url('change-password')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-6 mb-3">
                                    <div class="mb-2"><b>Change Password</b></div>
                                    <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                        <label>Current Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password"  name="current_password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                        <label>New Password</label>
                                        <input class="form-control" id="password1" data-parsley-minlength="4" required data-parsley-trigger="keyup" type="password" name="new_password">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                        <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                        <input class="form-control" type="password" name="confirm_new_password" data-parsley-minlength="4" required data-parsley-trigger="keyup" autofocus data-parsley-equalto="#password1">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex justify-content-end">
                                            <button class="btn btn-primary" type="submit">Save Password</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                                    <div class="mb-2"><b>Keeping in Touch</b></div>
                                    <div class="row">
                                    <div class="col">
                                        <div class="custom-controls-stacked px-2">
                                            <label class="" for="notifications-blog">0723 567 654</label><br>
                                            <label class="" for="notifications-blog">0723 567 654</label><br>
                                            <label class="" for="notifications-blog">0723 567 654</label>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-12 col-md-3 mb-3">
            <div class="card">
            <div class="card-body">
                <h6 class="card-title text-md font-weight-bold">Support</h6>
                <p class="card-text">Get fast, free help from our friendly assistants.</p>
                <a href="{{url('contact')}}" class="btn btn-primary">Contact Us</a>
            </div>
            </div>
        </div>
        </div>

    </div>
    </div>
    </div>
@endsection

<script>
    var triggerEl = document.querySelector('#change-password button[data-bs-target="#change-password"]')
    bootstrap.Tab.getInstance(triggerEl).show()

    $(function (){
        $('#checkForm').parsley();
    });
</script>
