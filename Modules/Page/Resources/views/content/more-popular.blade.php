<section id="iq-topten">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 overflow-hidden">
          <div class="topten-contents">
            <h4 class="main-title iq-title topten-title">
              Recomendacion Semanal
            </h4>
              
              <ul id="top-ten-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                @foreach ($recommendations as $recommendation)
                <li class="slick-bg">
                  <a href="#">
                    <img src="{{$recommendation->cover}}" class="img-fluid w-100" alt="" />
                    <h6 class="iq-title"><a href="#">{{$recommendation->name}}</a></h6>
                  </a>
                </li>
                @endforeach
              </ul>
              
              <div class="vertical_s">
                <ul id="top-ten-slider-nav" class="list-inline p-0 m-0 d-flex align-items-center">
                  @foreach ($recommendations as $recommendation)
                  <li>
                    <div class="block-images position-relative">
                      <a href="#">
                        <img src="{{$recommendation->cover}}" class="img-fluid w-100" alt="" />
                      </a>
                      <div class="block-description">
                        <h5>{{$recommendation->name}}</h5>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">
                            {{$recommendation->categorias->name}}
                          </div>
                          <span class="text-white"></span>
                        </div>
                        <div class="hover-buttons">
                          <a href="serie/{{$recommendation->name}}" class="btn btn-hover" tabindex="0">
                            <i class="fa fa-play mr-1" aria-hidden="true"></i>
                            Ver ahora
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            
          </div>
        </div>
      </div>
    </div>
</section>
