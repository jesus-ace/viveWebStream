<section id="iq-favorites" class="s-margin">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 overflow-hidden">
          <div class="iq-main-header d-flex align-items-center justify-content-between">
            <h4 class="main-title mt-4">123 TV</h4>
            <a href="#" class="iq-view-all">ver todos</a>
          </div>
          <div class="favorite-contens">
            {{-- <ul class="favorites-slider list-inline row p-0 mb-0">
              @foreach ($recommendations as $recommendation)
                @if ($recommendation->categoria_id != 4)
                  <li class="slide-item">
                    <div class="block-images position-relative">
                      <div class="img-box">
                              <img src="{{$recommendation->cover}}" class="img-fluid" alt="" />
                      </div>
                      <div class="block-description">
                      <h6 class="iq-title" style="margin-top: 80px;">
                        <a href="#">{{$recommendation->name}}</a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                      </div>
                      <div class="hover-buttons">
                        <a class="btn btn-hover iq-button" href="serie/{{$recommendation->name}}">
                          <i class="fa fa-play mr-1"></i>
                          Ver ahora
                        </a>
                      </div>
                      </div>
                    </div>
                  </li>
                @endif
              @endforeach
            </ul> --}}
            <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
              @foreach ($recommendations as $recommendation)
                @if ($recommendation->categoria_id != 4)
                  <div class="e-item">
                    <div class="block-image position-relative">
                      <a href="#">
                        <img src="{{$recommendation->cover}}" class="img-fluid" alt="">
                      </a>
                      <div class="episode-play-info">
                        <div class="episode-play" data-toggle="modal">
                          <a href="serie/{{$recommendation->name}}" tabindex="0">
                            <i class="fa fa-play"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="episodes-description text-body">
                      <div class="d-flex align-items-center justify-content-between">
                        <a href="serie/{{$recommendation->name}}" data-toggle="modal"></a>
                      </div>
                      <p class="mb-0">{{$recommendation->name}}</p>
                    </div>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>