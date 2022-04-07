<div class="container-fluid bg-black">
  <div class="row">
    <div class="col-12 mx-auto text-center">
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
          <div class="carousel-item  active">
            <img src="{{asset('assets/image/electronics.jpg')}}" style="border-radius: 8px;"  alt="Display1" class="d-block img-fluid" >
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/image/AC,FRIDGE AND WD.jpg')}}" style="border-radius: 8px;" alt="Display1" class="d-block  img-fluid">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/image/blankets and pillows.jpg')}}" style="border-radius: 8px;" alt="Display1" class="d-block img-fluid" >
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/image/SANDALS.jpg')}}" style="border-radius: 8px;" alt="Display1" class="d-block img-fluid" >
          </div>
        </div>

        {{-- Controls --}}
        <a href="#display" id="display" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>

         <a href="#display" id="display" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
      </div>

    </div>
  </div>
</div>

