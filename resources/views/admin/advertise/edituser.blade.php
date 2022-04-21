@extends('admin.advertise.advertise')


@section('content')
<div class="col-md-8 mb-xl-0 mb-4 mx-auto">
    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Edit Details for {{ $user->name}}
                </h6>
            </div>
        </div>
        <div class="card-body px-0 mx-3 pb-2 ">
            <h6 for="">Current Role: {{$user->role_as == '2'? 'Super Admin':
                                           ( $user->role_as == '1'? 'Normal Admin' : 'User')}}</h6>
            <h6 for="">Email: {{$user->email}}</h6>
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
            <h6 for="">Phone Number1: {{format($user->phone1)}}</h6>
                <br>
            <form action="{{ url('update-access') }}" method="post">
                @csrf
                @method('POST')
                <h5>Update Role</h5>
                <input type="hidden" name="id" value="{{ $user->id }}">
                <input type="radio" name="role" value="0" id="" required>&nbsp; Normal User <br>
                <input type="radio" name="role" value="1" id="">&nbsp; Normal Admin <br>
                <input type="radio" name="role" value="2" id="">&nbsp; Super Admin  <br>

        </div>

      <hr class="dark horizontal my-0">
      <div class="card-footer p-3">
        <button type="submit" class="btn btn-primary">Update Role</button>
      </div>
    </form>
</div>
@endsection

