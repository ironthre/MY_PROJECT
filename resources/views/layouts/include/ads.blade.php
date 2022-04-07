<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card body">
                    Advertise with andmack
                    <img src="{{asset('assets/image/164928331360\2.jpg')}}" style="border-radius: 8px;"  alt="Display1" class="d-block img-fluid" >
                </div>
            </div>
        </div>
      <div class="col-md-8 mx-auto text-center">
        <div id="display" class="carousel slider" data-ride='carousel'>
          {{-- Indicators --}}
          <ul class="carousel-indicators">
            <li data-target="#display" data-slide-to='0' class="active"></li>
            <li data-target="#display" data-slide-to='1'></li>
            <li data-target="#display" data-slide-to='2'></li>
            <li data-target="#display" data-slide-to='3'></li>
          </ul>
          {{-- End of Indicators --}}

          {{-- Images of Display --}}

          <div class="carousel-inner py-1" >
            @foreach ($ads as $key => $ad)
            <div class="carousel-item {{ $key == 0 ? ' active' : '' }}">
                <img src="{{asset('assets/image/'.$ad->image)}}" style="border-radius: 8px;" alt="Display1" class="d-block  img-fluid">
            </div>
            @endforeach
          </div>

          {{-- Controls --}}
          <a href="#display" id="display" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>

           <a href="#display" id="display" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
        </div>

      </div>
    </div>
  </div>

