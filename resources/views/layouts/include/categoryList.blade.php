<div class="container">
    <div class="row">
            <div class="card-deck pt-4">
                @foreach ($trending_category as $trend )
                    <div class="card border-0 mx-1" style="height: 180px;">
                        <img src="{{asset('assets/uploads/category/'.$trend->image)}}" height="100px;" alt="Category Image" style="border-radius: 50%;" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">{{$trend->name}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</div>
