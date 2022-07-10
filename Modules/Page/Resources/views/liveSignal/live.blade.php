@extends('page::layouts.master')
@section('content')
@include('page::navbar')
<div class="main-content">
    <section id="home" class="iq-main-slider p-0 mt-5 ml-3 mr-3" style="border-radius: 5px">
        <iframe style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden" frameborder="0" type="text/html" src="https://www.dailymotion.com/embed/video/x89yq4w?autoplay=1" width="100%" height="100%" allowfullscreen allow="autoplay"> </iframe>
    </section>

    <script>
        var idRequest = document.getElementById('dmp_jsEnabled');
        if (idRequest !== null) {
            console.log(idRequest);
        }
    </script>
</div>
@include('page::layouts.footer') 
@endsection