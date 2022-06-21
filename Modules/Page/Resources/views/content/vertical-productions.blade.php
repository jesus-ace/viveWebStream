<section id="iq-favorites">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 overflow-hidden">
          <div class="iq-main-header d-flex align-items-center justify-content-between">
            <h4 class="main-title">Producciones Verticales</h4>
            <a href="#" class="iq-view-all">ver todos</a>
          </div>
          <div class="favorite-contens">
            <ul class="favorites-slider list-inline row p-0 mb-0">
              @foreach ($vertical_productions as $vertical_production)
                <li class="slide-item col-md-3">
                  <div class="block-images position-relative" style="width:210px;">
                    <div class="img-box">
                            <img src="{{$vertical_production->cover}}" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                    <h6 class="iq-title" style="margin-top: 180px;">
                      <a href="#">{{$vertical_production->name}}</a>
                    </h6>
                    <div class="movie-time d-flex align-items-center my-2">
                      {{-- <div class="badge badge-secondary p-1 mr-2">16+</div> --}}
                      {{-- <span class="text-white">{{$vertical_productions->sub_name}}</span> --}}
                    </div>
                    <div class="hover-buttons">
                      <a class="btn btn-hover iq-button" href="serie/{{$vertical_production->name}}">
                        <i class="fa fa-play mr-1"></i>
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
</section>