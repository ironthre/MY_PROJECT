<div class="container">
    <div class="row cateList">
        {{-- <div class="card-deck col-4 col-md-2 pt-4"> --}}
            @foreach ($trending_category as $trend )
            <div class="row card card-colle col-4 col-md-2">
                <a href="{{url('view-category/'.$trend->name)}}">
                    <div class="card border-0 mx-2 px-2 single-card" style="width: 90%;">
                        <img src="{{asset('assets/uploads/category/'.$trend->image)}}" class="img" height="100px;" alt="Category Image" style="border-radius: 50%;" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-text pCard">{{$trend->name}} </h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        {{-- </div> --}}
    </div>
</div>


<style>
    .card-colle{
        position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin: 4px;
    }
    .card-colle .single-card img{
        width: 90%;
        padding: 5px;
        border-radius: 50%;
    }
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

