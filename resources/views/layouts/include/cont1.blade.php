<div class="row col-md-10 mx-auto">
    <div class="col-md-6 col-sm-6 mb-xl-0 my-4">
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
    <div class="col-md-6 col-sm-6 mb-xl-0 my-4">
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
    <div class="col-md-6 col-sm-6 mb-xl-0 my-4">
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
    <div class="col-md-6 col-sm-6 my-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">weekend</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Orders</p>
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


<div class="row col-md-10 mx-auto">
    <div class="col-md-6 col-sm-6 mb-xl-0 my-6">
        <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">List Of Out Of Stock Product</h6>
                </div>
            </div>
          <hr class="dark horizontal my-0">
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-users-center justify-content-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Name</th>
                            {{--  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Phone</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Role</th>
                            <th></th>  --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($solid_out as $user )
                            <tr>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $user->name}}</p>
                                </td>
                                {{--  <td>
                                    <span class="text-xs font-weight-bold">{{ $user->email }}</span>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">{{ $user->phone1 }}</span>
                                </td>  --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
    </div>
    </div>
      <div class="col-md-6 col-sm-6 mb-xl-0 my-6">
        <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">List Of Normal Admins</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-users-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users_normal as $user )
                                <tr>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $user->name}}</p>
                                    </td>
                                    <td>
                                        <span class="text-xs font-weight-bold">{{ $user->email }}</span>
                                    </td>
                                    <td>
                                        <span class="text-xs font-weight-bold">{{ $user->phone1 }}</span>
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
