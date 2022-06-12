<section id="iq-favorites">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 overflow-hidden">
        <div class="iq-main-header d-flex align-items-center justify-content-between">
          <h4 class="main-title">Nuevos Episodios</h4>
          <a href="#" class="iq-view-all">ver todos</a>
        </div>
        <div class="favorite-contens">
          <ul class="favorites-slider list-inline row p-0 mb-0">
            @foreach ($latest_episodes as $latest_episode)
              <li class="slide-item">
                <div class="block-images position-relative">
                  <div class="img-box">
                          <img src="{{$latest_episode->cover}}" class="img-fluid" alt="" />
                  </div>
                  <div class="block-description">
                  <h6 class="iq-title">
                    <a href="#">{{$latest_episode->name}}</a>
                  </h6>
                  <div class="movie-time d-flex align-items-center my-2">
                    {{-- <div class="badge badge-secondary p-1 mr-2">16+</div> --}}
                    <span class="text-white">{{$latest_episode->sub_name}}</span>
                  </div>
                  <div class="hover-buttons">
                    <span class="btn btn-hover iq-button">
                      <i class="fa fa-play mr-1"></i>
                      Ver ahora
                    </span>
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