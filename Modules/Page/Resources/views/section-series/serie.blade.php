@foreach ($series as $serie)
<section id="iq-trending" class="s-margin serie-content" style="background-image: url({{$series[0]->cover}}); background-repeat: no-repeat;
  background-size: cover">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 overflow-hidden">
        {{-- <div class="iq-main-header d-flex align-items-center justify-content-between">
          <h4 class="main-title">Trending</h4>
        </div> --}}
        <div class="serie-head">
          <div class="row">
              <div class="col-3">
                <figure style="margin-bottom: 1rem">
                  <img src="{{$series[0]->cover}}" alt="" width="243" height="278" style="object-position: 50% 50% !important; border-radius:5px;">
                </figure>
                <div class="addlist"> 
                  <button type="button" class="Button  aa-mdl" data-mdl="mdl-login"><i class="fas fa-plus"></i>Agregar a... <i class="fas fa-chevron-down ddw"></i></i></button>
                </div>
                {{-- <div class="tvshow">
                  <p><span></span> Temporadas</p><p><span></span> Capitulos</p>
                  <div class="cv3-dots" aria-hidden="true"> <span class="cv3-quality" title="En emision"><i></i></span></div>
                </div> --}}
              </div>
              <div class="col-9 ">
                <header>
                  <h1 style="font-size: 2.25rem; line-height: 1.5; color: #fff; font-weight: 700; margin-bottom: 0;">{{$series[0]->name}}</h1>
                  <h2 style="font-size: 1rem; margin-bottom: .5rem; line-height: 1.5rem; font-weight: 400; ">{{$series[0]->name}}</h2>
                </header>
                <div style="max-height: 100px; overflow: auto; margin-bottom: 1rem; color: #8da0bc, clear: none;">
                  <p>{{$series[0]->sinopsis}}</p>
                </div>
                <div class="MvTbCn on anmt" id="MvTb-Info" style="overflow: hidden;">
                  <ul class="InfoList" style="font-size: .875rem;"> 
                    <li class="AAIco-adjust" style="list-style-type: none; color: #8da0bc"><strong>Director:</strong> <span class="" style="color: #fff">Nathan Fielder</span></li>
                    <li class="AAIco-adjust" style="list-style-type: none; color: #8da0bc"><strong>Genero:</strong> <a href="">Comedy</a> </li>
                    <li class="AAIco-adjust loadactor" style="list-style-type: none; color: #8da0bc"><strong>Actores:</strong> <a class="tt-at" href="">Nathan Fielder</a> 
                    </li>
                  </ul>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="s-margin" style="margin-top: -80px">
  <div class="container-fluid">
    <div class="select-season"> 
      <span>Seleccionar temporada</span> 
      <select name="" id="select-season">
        <option value="1">Temporada 1</option> 
      </select>
    </div>
  
    <ul class="all-episodes MovieList Rows AX A06 B04 C03 E20 episodes list-inline">
      @foreach ( $serie->capitulo as $e_item)
        <li class="xxx TPostMv"  style="width: 250.75px" style="cursor: pointer">
          <div class="e-item" style="width: 250.75px" data-toggle="modal" data-target="#modal{{$e_item->id}}" tabindex="0">
            <div class="block-image position-relative">
              <a href="/{{$series[0]->name}}/{{$e_item->id}}">
                <img src="{{$e_item->cover}}" class="img-fluid" alt="">
              </a>
              <div class="episode-play-info">
                <div class="episode-play" data-toggle="modal">
                  <a href="/{{$series[0]->name}}/{{$e_item->id}}">
                    <i class="fa fa-play"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="episodes-description text-body">
              <div class="d-flex align-items-center justify-content-between">
                <a href="/{{$series[0]->name}}/{{$e_item->id}}" style="cursor: pointer"></a>
              </div>
              <p class="mb-0">{{$e_item->name}}</p>
            </div>
          </div>
        </li>
      @endforeach
    </ul>
  </div>
</section>
@endforeach
{{-- @include('page::section-series.modal-player') --}}
<script src="/js/jquery-3.4.1.min.js"></script>

<script>
  $(document).ready(function(){

    $("#sessons").change(function(){
      var seleccion= $(this).children("option:selected").val();
      console.log(seleccion);
    });

  });

  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })

  
</script>
