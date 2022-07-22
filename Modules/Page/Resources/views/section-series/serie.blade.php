@foreach ($series as $serie)
<section id="iq-trending" class="s-margin">
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
                  <img src="{{$series[0]->cover}}" alt="" width="285" height="278" style="object-position: 50% 50% !important;">
                </figure>
                <div class="addlist"> 
                  <button type="button" class="Button  aa-mdl" data-mdl="mdl-login"><i class="fa-plus-square"></i>Agregar a... <i class="fa-chevron-down ddw"></i></button>
                </div>
                <div class="tvshow">
                  <p><span></span> Temporadas</p><p><span></span> Capitulos</p>
                  <div class="cv3-dots" aria-hidden="true"> <span class="cv3-quality" title="En emision"><i></i></span></div>
                </div>
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
        <div class="select-season"> 
          <span>Seleccionar temporada</span> 
          <select name="" id="select-season">
            <option value="1">Temporada 1</option>
            <option value="2">Temporada 2</option> 
          </select>
        </div>
      </div>
    </div>
  </div>
</section> 
@endforeach
@include('page::section-series.modal-player')
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
