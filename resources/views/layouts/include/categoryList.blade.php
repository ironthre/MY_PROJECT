<div class="container">
    <div class="row">
        <div class="card-group">
            @foreach ($trending_category as $trend )
                <div class="card">
                    <img src="{{asset('assets/uploads/category/'.$trend->image)}}" alt="Category Image" class="card-img-top">
                    <div class="card-body">
                        <h6>{{$trend->name}}</h6>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
