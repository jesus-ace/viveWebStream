@foreach ($series as $serie)
<section id="iq-trending" class="s-margin">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 overflow-hidden">
        <div class="iq-main-header d-flex align-items-center justify-content-between">
          {{-- <h4 class="main-title">Trending</h4> --}}
        </div>
        <div class="trending-contens">
          <ul id="trending-slider-nav" class="list-inline p-0 mb-0 row align-items-center">
            <li>
              <a href="javascript:void(0);">
                <div class="movie-slick position-relative">
                  <img src="{{$serie->cover}}" class="img-fluid" alt="">
                </div>
              </a>
            </li>
          </ul>
          <ul id="trending-slider" class="list-inline p-0 m-0 d-flex align-items-center">
            <li>
              <div class="tranding-block position-relative" style="background-image: url({{$serie->cover}});">
                <div class="trending-custom-tab">
                  <div class="tab-title-info position-relative">
                    <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                      <li class="nav-item">
                        <a href="#trending-data1" class="nav-link active show" data-toggle="pill" role="tab" aria-selected="true">
                          Sinopsis
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#trending-data2" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                          Episodios
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="trending-content">
                    <div id="trending-data1" class="overview-tab tab-pane fade active show">
                      <div class="trending-info align-items-center w-100 animated fadeInUp">
                        <a href="javascript:void(0);" tabindex="0">
                          <div class="res-logo">
                            <div class="channel-logo">
                              {{-- <img src="images/logo.png" class="c-logo" alt=""> --}}
                              <h1>{{$serie->name}}</h1>
                            </div>
                          </div>
                        </a>
                        {{-- <h1 class="trending-text big-title text-uppercase">The Crown</h1> --}}
                        <div class="d-flex align-items-center text-white text-detail mt-3">
                          <span class="badge badge-secondary p-3">{{$serie->categorias->name}}</span>
                          {{-- <span class="ml-3">1 Temporada</span> --}}
                          <span class="trending-year">2022</span>
                        </div>
                        <div class="d-flex align-items-center series mb-4">
                          <a href="javascript:void(0);">
                            <img src="" class="img-fluid" alt="">
                          </a>
                          <span class="text-gold ml-3">Producido : Vive TV</span>
                        </div>
                        <p class="trending-dec">
                          {{$serie->sinopsis}}
                        </p>
                        <div class="p-btns">
                          <div class="d-flex align-items-center p-0">
                            <a href="#" class="btn btn-hover mr-2" tabindex="0">
                              <i class="fa fa-play mr-2"></i>
                              Ver ahora
                            </a>
                            {{-- <a href="#" class="btn btn-link" tabindex="0">
                              <i class="fa fa-plus pr-2"></i>
                              My List 
                            </a> --}}
                          </div>
                        </div>
                        <div class="trending-list mt-4">
                          <div class="text-primary title">
                            Productores : 
                            <span class="text-body">
                              Vive tv, Vive tv, Vive tv
                            </span>
                          </div>
                          {{-- <div class="text-primary title">
                            Genres :
                            <span class="text-body">
                              Biography
                            </span>
                          </div>
                          <div class="text-primary title">
                            Creators :
                            <span class="text-body">
                              Peter Morgan
                            </span>
                          </div> --}}
                        </div>
                      </div>
                    </div>

                    <div id="trending-data2" class="overlay-tab tab-pane fade">
                      <div class="trending-info align-items-center w-100 animated fadeInUp">
                        <a href="#" tabindex="0">
                          <div class="channel-logo">
                              <h1>Cine Corto</h1>
                          </div>
                        </a>
                        {{-- <h1 class="trending-text big-title text-uppercase">the Crown</h1> --}}
                        <div class="d-flex align-items-center text-white text-detail mb-4">
                          <span class="season_date">
                           Temporada 1
                          </span>
                          <span class="trending-year">Ago 2022</span>
                        </div>
                        <div class="iq-custom-select d-inline-block sea-epi">
                          <select name="Seasons" class="form-control season-select" id="sessons">
                            @foreach ($sessons as $sesson)
                              <option value="{{$sesson->temporada_id}}">Temporada {{$sesson->temporada_id}}</option> 
                            @endforeach
                          </select>
                        </div>

                        <div class="episodes-contens mt-4">
                          <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                            @foreach ($series as $seriescap)
                                @foreach ($seriescap->capitulo as $e_item)
                                  <div class="e-item">
                                    <div class="block-image position-relative">
                                      <a href="#">
                                        <img src="{{$e_item->cover}}" class="img-fluid" alt="">
                                      </a>
                                      <div class="episode-play-info">
                                        <div class="episode-play">
                                          <a href="#" tabindex="0">
                                            <i class="fa fa-play"></i>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="episodes-description text-body">
                                      <div class="d-flex align-items-center justify-content-between">
                                        <a href="#">{{$e_item->name}}</a>
                                      </div>
                                      <p class="mb-0">{{$e_item->sub_name}}</p>
                                    </div>
                                  </div>
                                @endforeach
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>  
@endforeach
<script src="/js/jquery-3.4.1.min.js"></script>
<script>
  $(document).ready(function(){

    $("#sessons").change(function(){
      var seleccion= $(this).children("option:selected").val();
      console.log(seleccion);
    });

  });
  
</script>