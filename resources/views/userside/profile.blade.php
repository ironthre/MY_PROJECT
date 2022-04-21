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
                        <span class="badge badge-secondary">administrator</span>
                        <div class="text-muted"><small>Joined {{date('F d, Y', strtotime($user->created_at))}}</small></div>
                    </div>
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="" class="active nav-link"><b>Edit Profile</b></a></li>
                </ul>
                <div class="tab-content pt-3">
                    <div class="tab-pane active">
                    <form class="form" novalidate="">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="name" placeholder="" value="{{$user->username}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" type="text" name="username" placeholder="" value="{{$user->phone1}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="text" placeholder="user@example.com" value="{{$user->email}}">
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
                                    <input class="form-control" type="text" name="name" placeholder="" value="{{$user->fnam}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" name="username" placeholder="" value="{{$user->lname}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                    <label>City / Region</label>
                                    <input class="form-control" type="text" name="name" placeholder="" value="{{$user->city}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" type="text" name="username" placeholder="" value="{{$user->address1}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="mb-2"><b>Change Password</b></div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>Current Password</label>
                                <input class="form-control" type="password" placeholder="••••••">
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>New Password</label>
                                <input class="form-control" type="password" placeholder="••••••">
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                <input class="form-control" type="password" placeholder="••••••"></div>
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
                        <div class="row">
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Save Changes</button>
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
            <div class="card mb-3">
            <div class="card-body">
                <div class="px-xl-3">
                <button class="btn btn-block btn-secondary">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                </button>
                </div>
            </div>
            </div>
            <div class="card">
            <div class="card-body">
                <h6 class="card-title font-weight-bold">Support</h6>
                <p class="card-text">Get fast, free help from our friendly assistants.</p>
                <button type="button" class="btn btn-primary">Contact Us</button>
            </div>
            </div>
        </div>
        </div>

    </div>
    </div>
    </div>
@endsection