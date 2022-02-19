<div class="container">
    <div class="row cateList justify-content-center">
        <div class="card-deck pt-4">
            @foreach ($trending_category as $trend )
                <a href="{{url('view-category/'.$trend->name)}}">
                    <div class="card border-0 mx-1" style="height: 180px;">
                        <img src="{{asset('assets/uploads/category/'.$trend->image)}}" height="100px;" alt="Category Image" style="border-radius: 50%;" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-text pCard">{{$trend->name}} </h6>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>


<style>
    .cateList a{
        text-decoration: none;
    }
    .pCard{
        font-weight: bold;
        border-radius: 4px;
        text-transform: capitalize;
        font-size: 15px;
        color: #0c3146
</style>
