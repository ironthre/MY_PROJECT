<div class="container">
    <div class="row">
        <div class="card-deck pt-4">
            @foreach ($trending_category as $trend )
                <a href="{{url('view-category/'.$trend->name)}}">
                    <div class="card border-0 mx-1" style="height: 180px;">
                        <img src="{{asset('assets/uploads/category/'.$trend->image)}}" height="100px;" alt="Category Image" style="border-radius: 50%;" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text text-primary">View All > <br>{{$trend->name}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
