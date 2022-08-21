<section id="iq-favorites" class="s-margin">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 overflow-hidden">
          <div class="iq-main-header d-flex align-items-center justify-content-between">
            <h4 class="main-title  mt-4">Producciones Verticales</h4>
            <a href="#" class="iq-view-all">ver todos</a>
          </div>
          <div class="favorite-contens">
              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                @foreach ($vertical_productions as $vertical_production)
                      <div class="e-item">
                        <div class="block-image position-relative">
                          <a href="serie/{{$vertical_production->name}}">
                            <img src="{{$vertical_production->cover}}" class="img-fluid" alt="">
                          </a>
                          <div class="episode-play-info">
                            <div class="episode-play" data-toggle="modal">
                              <a href="serie/{{$vertical_production->name}}" tabindex="0">
                                <i class="fa fa-play"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="episodes-description text-body">
                          <div class="d-flex align-items-center justify-content-between">
                            <a href="serie/{{$vertical_production->name}}" data-toggle="modal"></a>
                          </div>
                          <p class="mb-0">{{$vertical_production->name}}</p>
                        </div>
                      </div> 
                @endforeach
              </div>
          </div>
        </div>
      </div>
    </div>
</section>