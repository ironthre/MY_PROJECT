

<style>
      .cats-block {
        margin-top:20px;margin-bottom:50px;margin-left:0px;margin-right:0px;
      }
      .cats-block .cat-img {
        text-align:center;
      }
@media  screen and (max-width: 450px) {
  .cats-block .col-4 {padding-left:0px;padding-right:0px}
}
      .cats-block .cat-img:hover {
        cursor:pointer
      }
      .cats-block .cat-img:hover img {
        border: 0.5px solid #fff;
      }
      .cats-block .cat-img:hover .cat-desc{
        text-decoration:underline
      }
      .cats-block .cat-img img {
        width:90%;border-radius:50%;padding:5px
      }
      .cats-block .cat-img .cat-desc {
        margin-top:5px;color:#fff
      }

      #info-section {
        width: 96%;
        margin-left: 2%;
        /* height: 400px; */
        background:#333435;
        color:#fff;
        word-wrap: break-word;
      }
      .moretext {
        display: none;
      }
    </style>


<div class="product-categories container-fluid" style="padding: 0px;">

<style>
      .cats-block {
        background-color: #8edbe1;
        margin-top:20px;margin-bottom:50px;margin-left:0px;margin-right:0px
      }
      .cats-block .cat-img {
        text-align:center;
      }
@media  screen and (max-width: 450px) {
  .cats-block .col-4 {padding-left:0px;padding-right:0px}
}
      .cats-block .cat-img:hover {
        cursor:pointer
      }
      .cats-block .cat-img:hover img {
        border: 0.5px solid #fff;
      }
      .cats-block .cat-img:hover .cat-desc{
        text-decoration:underline
      }
      .cats-block .cat-img img {
        width:90%;border-radius:50%;padding:5px
      }
      .cats-block .cat-img .cat-desc {
        margin-top:5px;color:#fff
      }

      #info-section {
        width: 96%;
        margin-left: 2%;
        /* height: 400px; */
        background:#333435;
        color:#fff;
        word-wrap: break-word;
      }
      .moretext {
        display: none;
      }
</style>

        <div class="row cats-block ">
            <div class="col-md-2 col-4">
              <div class="cat-img short-cut-category" alias="?main-cat=4&amp;cat=30">
                <img src="{{asset('assets/image/kangaIcon.jpg')}}" alt="">
                <div class="cat-desc" style="text-align:center">
                  <h6>Kanga</h6>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="cat-img short-cut-category" alias="?main-cat=3&amp;cat=all">
                <img src="{{asset('assets/image/smartIcon.jpg')}}" alt="">
                <div class="cat-desc" style="text-align:center">
                  <h6>Phones</h6>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="cat-img short-cut-category" alias="?main-cat=2&amp;cat=9">
                <img src="{{asset('assets/image/sandalsIcon.jpg')}}" alt="">
                <div class="cat-desc" style="text-align:center">
                  <h6>Sandals</h6>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="cat-img short-cut-category" alias="?main-cat=3&amp;cat=29">
                <img src="{{asset('assets/image/acceIcon.jpg')}}" alt="">
                <div class="cat-desc" style="text-align:center">
                  <h6>Accessories</h6>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="cat-img short-cut-category" alias="?main-cat=1&amp;cat=19">
                <img src="{{asset('assets/image/MusicIcon.jpg')}}" alt="">
                <div class="cat-desc" style="text-align:center">
                  <h6>Music</h6>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="cat-img short-cut-category" alias="?main-cat=5&amp;cat=all">
                <img src="{{asset('assets/image/bagsIcon.jpg')}}" alt="">
                <div class="cat-desc" style="text-align:center">
                  <h6>Bags</h6>
                </div>
              </div>
            </div>
          </div>






    <script type="text/javascript">
      $('.moreless-button').click(function() {
        $('.moretext').slideToggle();
        if ($('.moreless-button').text() == "Read more") {
          $(this).text("Read less")
        } else {
          $(this).text("Read more")
        }
      });
    </script></div>
