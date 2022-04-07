<div class="row col-md-12 mx-auto mb-6" >
    <div class="col-md-3 col-sm-6 mb-xl-0 my-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">weekend</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Total Advertise</p>
              <h4 class="mb-0">{{$ads->count()}}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            <a href="{{ url('create-ads') }}" class="nav-link text-body p-0">
                <i class="fa fa-add btn btn-outline-primary fixed-plugin-button-nav cursor-pointer">Create  new ads</i>
            </a>
          </div>
        </div>
      </div>

    <div class="col-md-8 col-sm-6 mb-xl-0 my-4">
        <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">List Of Advertises</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-users-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Brand Name</th>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Phone</th>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Owner</th>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Expire</th>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ads as $ads)
                                <tr>

                                   <td> {{$ads->brand }}</td>
                                   <td> {{$ads->phone }}</td>
                                   <td> {{$ads->email }}</td>
                                   <td> {{$ads->owner }}</td>
                                   <td> {{$ads->expire}}</td>
                                   <td class="align-middle">
                                        <a href="{{ url('delete-ad/'.$ads->id) }}" class="btn btn-primary mb-0">Delete</a>
                                    </td>

                                    {{--  <span class="text-xs font-weight-bold">phone1</span>  --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
</div>
