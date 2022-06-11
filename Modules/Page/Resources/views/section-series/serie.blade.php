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
                    <img src="/image/CineCorto_375x210px.png" class="img-fluid" alt="">
                  </div>
                </a>
              </li>
            </ul>
            <ul id="trending-slider" class="list-inline p-0 m-0 d-flex align-items-center">
              <li>
                <div class="tranding-block position-relative" style="background-image: url(/image/CineCorto_375x210px.png);">
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
                                <h1>Cine Corto</h1>
                              </div>
                            </div>
                          </a>
                          {{-- <h1 class="trending-text big-title text-uppercase">The Crown</h1> --}}
                          <div class="d-flex align-items-center text-white text-detail">
                            <span class="badge badge-secondary p-3">Familiar</span>
                            <span class="ml-3">1 Temporada</span>
                            <span class="trending-year">2022</span>
                          </div>
                          <div class="d-flex align-items-center series mb-4">
                            <a href="javascript:void(0);">
                              <img src="" class="img-fluid" alt="">
                            </a>
                            <span class="text-gold ml-3">Producido : Vive TV</span>
                          </div>
                          <p class="trending-dec">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex facere sapiente optio dolor aperiam impedit sint molestiae delectus, qui magni 1500 thid had that.
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
                            <select name="Seasons" class="form-control season-select">
                              <option value="Season1">Temporada 1</option>
                              <option value="Season2">Temporada 2</option>
                              <option value="Season3">Temporada 3</option>
                              <option value="Season4">Temporada 4</option>
                              <option value="Season4">Temporada 4</option>
                              <option value="Season6">Temporada 6</option>
                            </select>
                          </div>

                          <div class="episodes-contens mt-4">
                            <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                              <div class="e-item">
                                <div class="block-image position-relative">
                                  <a href="#">
                                    <img src="/image/cineCorto/Web_CC-01_Chalbaud.webp" class="img-fluid" alt="">
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
                                    <a href="#">Entrevista a Román Chalbaud</a>
                                  </div>
                                  <p class="mb-0">Hacer cine en Venezuela es posible</p>
                                </div>
                              </div>
                              <div class="e-item">
                                <div class="block-image position-relative">
                                  <a href="#">
                                    <img src="/image/cineCorto/Web_CC-02_Blaser.webp" class="img-fluid" alt="">
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
                                    <a href="#">Entrevista a Liliane Blaser</a>
                                  </div>
                                  <p class="mb-0">Enseñar a aprender y aprender a enseñar</p>
                                </div>
                              </div>
                              <div class="e-item">
                                <div class="block-image position-relative">
                                  <a href="#">
                                    <img src="/image/cineCorto/Web_CC-03_Rodriguez.webp" class="img-fluid" alt="">
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
                                    <a href="#">Entrevista a Andrés Rodríguez</a>
                                  </div>
                                  <p class="mb-0">Cree en el “cine de descubrimiento”</p>
                                </div>
                              </div>
                              <div class="e-item">
                                <div class="block-image position-relative">
                                  <a href="#">
                                    <img src="/image/cineCorto/Web_CC-04_Charalambidis.webp" class="img-fluid" alt="">
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
                                    <a href="#">Entrevista a Carlos Azpúrua</a>
                                    <span class="text-primary">2.25m</span>
                                  </div>
                                  <p class="mb-0">“El cine comprometido es una necesidad”</p>
                                </div>
                              </div>
                              <div class="e-item">
                                <div class="block-image position-relative">
                                  <a href="#">
                                    <img src="/image/cineCorto/Web_CC-06_Rocca.webp" class="img-fluid" alt="">
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
                                    <a href="#">Entrevista a Edgar Rocca </a>
                                  </div>
                                  <p class="mb-0">El reto del cine venezolano es verse en otros países</p>
                                </div>
                              </div>

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