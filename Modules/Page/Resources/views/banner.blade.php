{{-- <section class="content-banner" id="content-banner"  style="background-image: url(/image/Banner_1920x1080px.jpg);">
    <!-- <div class="cont_video">
        <video src="./images/video1.mp4" muted loop autoplay type="video/mp4" class="video-bg">
        </video>
        <video src="./images/video1.mp4" muted loop autoplay type="video/mp4" class="video-bg2" width="260px">
        </video>
    </div> -->
    <div class=" row d-flex justify-content-center w-100" style="">
        <div class="col-md-12">
            <div class="text-banner">
                <p class="first-title font-text-bold" style="font-size: 24pt;">Vive la Semana Santa</p>
                <p class="banner-des font-text" style="font-size: 12pt;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button class="font-text-bold btn-banner"><img src="/image/play-solid.svg"  width="30" height="30"></button>
                <button class="font-text-bold btn-banner-2">INFORMACIÓN</button>
            </div>
        </div>
    </div>
</section> --}}
<section id="home" class="iq-main-slider p-0">
    <div id="home-slider" class="slider m-0 p-0">
      @foreach ($banners as $banner)
        {{-- <style>
          #home-slider .slick-bg.s-bg-{{$banner->id}}{
            background-image: url({{$banner->image}});
          }
        </style> --}}
      <div class="slide slick-bg s-bg-{{$banner->id}}" style="background-image: url({{$banner->image}})">
        <div class="container-fluid position-relative h-100">
          <div class="slider-inner h-100">
            <div class="row align-items-center h--100">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <a href="javascript:void(0)">
                  <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                    <h1> {{$banner->name}}</h1>
                  </div>
                </a>
                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                  data-delay-in="0.6">
                  {{$banner->name}}
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul
                      class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star-half"></i></li>
                    </ul>
                    <span class="text-white ml-2">2022</span>
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2">familiar</span>
                    <span class="ml-3"></span>
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                  {{$banner->sinopsis}}
                </p>
                
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="#" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Ver ahora</a>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
              <a href="video/trailer.mp4" class="video-open playbtn">
                <img src="/image/play.png" class="play" alt="" />
                <span class="w-trailor">ver Trailer</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
  </section>