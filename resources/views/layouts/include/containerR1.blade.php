<div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Categories</p>
                <h4 class="mb-0">{{$category->count()}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than lask week</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Products</p>
                <h4 class="mb-0">{{$products->count()}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
                <p class="mb-0">Out Of Stock <span class="text-success text-sm font-weight-bolder px-3">{{ $solid_out->count() }}</span></p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Registered Users</p>
                <h4 class="mb-0">{{$users->count()}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
                <p class="mb-0">Normal Users<span class="text-danger text-sm font-weight-bolder px-3">{{$users_normal->count()}}</span></p>
                <p class="mb-0">Normal Admins<span class="text-danger text-sm font-weight-bolder px-3">{{$users_admin->count()}}</span></p>
                <p class="mb-0">Super Admins<span class="text-danger text-sm font-weight-bolder px-3">{{$users_super->count()}}</span></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 my-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Orders</p>
                  <h4 class="mb-0">{{$orders->count()}}</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0">Complete Orders<span class="text-success text-sm font-weight-bolder px-3">{{ $complete_order->count() }} </span></p>
                <p class="mb-0">Pending Orders<span class="text-success text-sm font-weight-bolder px-3">{{ $pending_order->count() }} </span></p>
              </div>
            </div>
          </div>
</div>
<div class="row my-4">
    <div class="col-md-8 col-sm-6 mb-xl-0 my-4">
        <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Notification From Users</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                @if ($contact->count() > 0)
                    <div class="table-responsive p-0">
                        <table class="table align-users-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                                    <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Phone</th>
                                    <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Message</th>
                                    <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                                    <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contact as $ads)
                                    <tr>

                                    <td> {{$ads->name }}</td>
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
                                            {{format($ads->phone) }}
                                        </td>
                                    <td> {{$ads->message }}</td>
                                    <td> {{$ads->created_at }}</td>
                                    <td class="align-middle">
                                            <a href="{{ url('message/'.$ads->id) }}" class="btn btn-info mb-0">view</a>
                                        </td>

                                        {{--  <span class="text-xs font-weight-bold">phone1</span>  --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="card-body">
                        <p class="font-weight-bold">Empty Notification Box </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-xl-0 my-6">
        <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Out Of Stock Product</h6>
                </div>
            </div>
          <hr class="dark horizontal my-0">
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
            @if ($solid_out->count() > 0)
                <table class="table align-users-center justify-content-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($solid_out as $prod )
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <img src="{{ asset('assets/uploads/product/'.$prod->image)}}" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $prod->name}}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <div class="card-body">
                        <p class="font-weight-bold">Currently no products under this Category</p>
                    </div>
            @endif
            </div>
          </div>
        </div>
    </div>
</div>
