@extends('page::layouts.master')
@section('content')
@include('page::navbar')
<link rel="stylesheet" href="/css/style-live.css" />
<div class="main-content">
    <!-- <section id="home" class="iq-main-slider p-0 mt-5 ml-3 mr-3" style="border-radius: 5px">
        <iframe style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden" frameborder="0" type="text/html" src="https://www.dailymotion.com/embed/video/x89yq4w?autoplay=1" width="100%" height="100%" allowfullscreen allow="autoplay"> </iframe>
            <video id="video"
                width="100%"
                style="width:100%;height:100%; position:absolute;left:0px;top:0px;overflow:hidden"
                poster="//shaka-player-demo.appspot.com/assets/poster.jpg"
                controls autoplay>
            </video>
    </section> -->
        <section class="iq-main-slider p-0" style="height: 100vh !important; z-index: 3 !important;">
                <div class="bd" style="position: relative; top: 100px;">
                    <div class="backdrop">
                        <div class="video cont" style="margin: auto;">
                            <h1 class="Title"></span></h1>
                            <h2 class="SubTitle"></h2>
                            <ul class="_1EGcQ_0 TPlayerNv tab_language_movie">
                                <li class="open_submenu actives">
                                    <div>
                                        <div>
                                            <span>En Directo</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class= "TPlayerCn BgA">
                                <div class="EcBgA">
                                
                                    <div class="TPlayer embed_div">
                                        <div class="TPlayerTb Current">
                                            <!-- <iframe class="no-you" data-src="" allowfullscreen="" src="" width="560" height="315" frameborder="0"></iframe> -->
                                            <video id="video"
                                                width="100%"
                                                style="position:absolute;left:0px;top:0px;overflow:hidden"
                                                poster="//shaka-player-demo.appspot.com/assets/poster.jpg"
                                                controls autoplay>
                                            </video>
                                        </div>
                                        {{-- <span class="fa-lightbulb lgtbx-lnk"></span> --}}
                                        
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <span class="lgtbx"></span>
                            
                        </div>
                        {{-- <div class="Image">
                            <figure class="Objf">
                                <img src="" data-src="" alt="img" class="lazy">
                            </figure>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    <script src="/js/shaka-player.compiled.js"></script>
	<script src="/js/myapp.js"></script>
    <script>
        var idRequest = document.getElementById('dmp_jsEnabled');
        if (idRequest !== null) {
            console.log(idRequest);
        }
    </script>
</div>
@include('page::layouts.footer') 
@endsection