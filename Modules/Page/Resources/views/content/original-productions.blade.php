<section id="iq-favorites">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 overflow-hidden">
        <div class="iq-main-header d-flex align-items-center justify-content-between">
          <h4 class="main-title">Producciones Originales de Vive</h4>
          <a href="#" class="iq-view-all">ver todos</a>
        </div>
        <div class="favorite-contens">
          <ul class="favorites-slider list-inline row p-0 mb-0">
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
                      {{-- <div class="badge badge-secondary p-1 mr-2">16+</div> --}}
                      {{-- <span class="text-white">{{$recommendations->sub_name}}</span> --}}
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
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>