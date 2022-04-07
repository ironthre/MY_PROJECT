<div class="row col-md-10 mx-auto mb-6" >
    <div class="col-md-8 col-sm-6 mb-xl-0 my-4 mx-auto">
        <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Create Ads</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <form action="{{ url('creating') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-2 mb-4 mx-auto">
                        <div class="form-group input-groups col-md-6">
                            <label for="">Brand Name</label><br>
                            <input  type="text" name="brand" required>
                        </div>
                        <div class="form-group input-groups mt-2 float-right col-md-6">
                            <label for="">Phone Contact</label><br>
                            <input  type="text" name="phone" required>
                        </div>
                    </div>
                    <div class="row my-4 mx-auto">
                        <div class="form-group input-groups col-md-6">
                            <label for="">Owner</label><br>
                            <input  type="text" name="owner" required>
                        </div>
                        <div class=" form-group input-groups mt-2 float-right col-md-6">
                            <label for="">Email</label><br>
                            <input  type="email" name="email" required>
                        </div>
                    </div>

                    <div class="row my-4 mx-auto">
                        <div class="form-group input-groups col-md-6 " >
                            <label for="">Exp Date</label><br>
                            <input type="date" name="expire" required>
                        </div>
                        <div class="form-group input-groups mt-2 float-right col-md-6">
                            <label for="">Image</label><br>
                            <input class="form-control-file" type="file" name="image" required>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <button  type="submit" class="btn btn-info">Create</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
