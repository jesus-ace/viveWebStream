@extends('page::layouts.master')
@section('content')
@include('page::navbar')
<!-- <section class="content-banner" id="content-banner" style="background-image: url(/image/CadaFamiliaUnaEscuela210x375px.png);">
    <div class=" row d-flex justify-content-center w-100">
        <div class="col-md-12">
            <div class="text-banner">
                <p class="first-title font-text-bold">The Flight Attendant</p>
                <p class="banner-des font-text">The Flight Attendant es una comedia de humor negro y suspenso sobre cómo una vida puede cambiar en una noche. Una
                    azafata despierta en el hotel equivocado, en la cama equivocada, con un hombre muerto y sin tener idea de lo ocurrido.</p>
                <button class="font-text-bold btn-banner"><img src="/image/play-solid.svg"  width="30" height="30"></button>
            </div>
        </div>
    </div>
</section> -->
@include('page::section-series.serie')
@include('page::section-series.series-mobile')
@endsection