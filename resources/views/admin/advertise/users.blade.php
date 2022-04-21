@extends('admin.advertise.advertise')

@section('content')
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">All Users</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-users-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User Name</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Phone</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Role</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Action</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user )
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                    {{-- <div>
                                                        <img src="{{ asset('assets/uploads/product/'.$user->image)}}" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                    </div> --}}
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $user->id }}</h6>
                                                    </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0">{{ $user->username}}</p>
                                                </td>
                                                <td>
                                                    <span class="text-xs font-weight-bold">{{ $user->email }}</span>
                                                </td>
                                                <td>
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
                                                    <span class="text-xs font-weight-bold">{{format($user->phone1)}}</span>
                                                </td>
                                                <td>
                                                    <span class="text-xs font-weight-bold">{{
                                                        $user->role_as == '2'? 'Super Admin':
                                                       ( $user->role_as == '1'? 'Normal Admin' : 'Normal User')
                                                     }}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{ url('user-view/'.$user->id) }}" class="btn btn-info mb-0">View</a>
                                                    <a href="{{ url('user-update/'.$user->id) }}" class="btn btn-primary mb-0">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

