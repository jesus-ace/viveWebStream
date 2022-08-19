@extends('page::layouts.master')
@section('content')
<style>
    .bd {
        flex: 1 0 auto;
    }
    @media (min-width: 992px){}
        .cont, .MovieListSldCn .TPMvCn, .MovieListSld .owl-dots {
             max-width: 1140px;
        }
    }
    .bd::before{
        position: absolute;
        z-index: 3;
    }
    video > .Title {
        font-size: 2.25rem !important;
        line-height: 1.5  !important;
    }
    .video > .Title {
        font-size: 1.5rem;
        color: #fff;
        font-weight: 700;
        margin-bottom: 0;
        line-height: 1.5rem;
    }
    .Title span:not([class]) {
        color: #0066CC;
    }
    ul, ol, dl, dt, dd, hr, h1, h2, h3, h4, h5, h6, p, pre, blockquote, table, fieldset, figure {
         margin: 0 0 1.25rem;
        margin-bottom: 1.25rem;
    }
    .video > .SubTitle {
        margin-bottom: 1.5rem;
        color:#8da0bc;
    }
    .movtv-info header .SubTitle, .video > .SubTitle {
        font-size: 1rem !important;
        margin-bottom: .5rem !important;
        line-height: 1.5rem !important;
        font-weight: 400 !important;
    }
    .TPlayerNv {
        background-color: rgba(61,79,145,.5);
        border-radius: 3px 3px 0 0;
        padding: .7rem .7rem 0;
        position: relative;
        margin-bottom: 0;
    }
    .TPlayerNv > li {
        display: inline-block;
        vertical-align: top;
        margin-right: .3rem;
        position: relative;
        margin-bottom: .7rem;
    }
    .TPlayerNv > li.actives > div {
        background-color: #0066CC;
    }
    .TPlayerNv > li > div {
        padding: .5rem;
        position: relative;
        white-space: nowrap;
        line-height: 1rem;
        border-radius: 3px;
        cursor: pointer;
    }
    .TPlayerNv > li > div > div {
        float: left;
    }
    .TPlayerNv > li > div > div > span {
        font-size: .875rem;
        color: #fff;
        vertical-align: top;
    }
    .TPlayerNv > li > div::after {
        clear: both;
        display: block;
        overflow: hidden;
        content: '';
    }
    .TPlayerCn {
        background-color: #000;
    }
    .video, .TPlayerCn {
        margin-bottom: 1.5rem;
    }
    .TPlayer {
        position: relative;
        z-index: 8;
    }
    .TPlayerTb.Current {
        display: block;
    }
    .TPlayerTb::before {
        content: '';
        display: block;
        padding-top: 56.55%;
    }
    .TPlayerTb > iframe, .TPlayerTb > object, .TPlayerTb > video {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    .lgtbx-lnk {
        right: -1rem;
        top: 0;
        bottom: 0;
        margin: auto;
    }
    .lgtbx-lnk {
        position: absolute;
        right: 1rem;
        top: 1rem;
        z-index: 10;
        color: #fff;
        width: 3rem;
        height: 3rem;
        border-radius: 5rem;
        text-align: center;
        line-height: 3rem;
        background-color: #007aff;
        font-size: 1.25rem;
        box-shadow: 0 0 0 5px rgba(0,122,255,.4);
        cursor: pointer;
    }
    .lgtbx-lnk {
        animation-duration: .2s;
        animation-fill-mode: both;
    }
    .fa-lightbulb::before {
        content: "\f0eb";
    }
    .lgtbx-lnk {
        color: #fff;
        text-align: center;
        line-height: 3rem;
        font-size: 1.25rem;
        cursor: pointer;
    }
    .lgtbx {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-color: #000;
        opacity: 0;
        visibility: hidden;
        transition: .2s;
        cursor: pointer;
    }
    .dfx, .MovieList.Rows, .people-List, .frm-cols {
        display: -webkit-flex;
        display: flex;
    }  
    .jst-sb {
        justify-content: space-between;
    }
    .episodes-nav .Button.list {
    padding: .5rem;
    background-color: #0066CC;
    color: #fff;
    font-size: 1.25rem;
    width: 3rem;
    /*box-shadow: 0 0 0 5px rgba(237,183,9,.2);*/
    }
    .Button, button, [type="button"], [type="reset"], [type="submit"] {
        border: 0;
        cursor: pointer;
        padding: .5rem 2rem;
        display: inline-block;
        vertical-align: top;
        text-align: center;
        line-height: 2rem;
        width: auto;
        border-radius: 3rem;
    }
    .fa-list-ul::before {
        content: "\f0ca";
    }
    .episodes-nav .Button:not(.list):not(:hover) {
        background-color: #1e2747;
    }
    .episodes-nav .Button.prev {
        padding-left: 3rem;
        text-align: left;
        padding-right: 1.5rem;
    }
    .episodes-nav .Button:not(.list) {
        padding-top: .6rem;
        padding-bottom: .2rem;
        line-height: 1rem;
        position: relative;
    }
    .Button, a.Button, button, [type="button"], [type="reset"], [type="submit"] {
        color: #fff;
        background-color: #007aff;
    }
    a::after, .TPost .Image figure::before, .Frm-Slct > label::before, .tr-delete::before, .trselect-delete::before, .delete-com::before {
        font-family: 'font awesome 5 free';
        font-weight: 900;
        font-style: normal;
    }
    .episodes-nav .Button.prev {
        text-align: left;
    }
    .episodes-nav .Button:not(.list) {
        line-height: 1rem;
    }
    .Button, a.Button, button, [type="button"], [type="reset"], [type="submit"] {
        color: #fff;
    }
    .disabled {
        visibility: hidden;
    }
    .Button, button, [type="button"], [type="reset"], [type="submit"] {
        cursor: pointer;
        text-align: center;
        line-height: 2rem;
    }
    .episodes-nav .Button > span > span {
        display: block;
        font-size: .65rem;
        text-transform: uppercase;
        font-weight: 700;
        color: #8da0bc;
    }
    /**buton anterior*/
    .episodes-nav .Button:not(.list):not(:hover) {
        background-color: #1e2747;
    }
    .episodes-nav .Button.prev {
        padding-left: 3rem;
        text-align: left;
        padding-right: 1.5rem;
    }
    .episodes-nav .Button:not(.list) {
        padding-top: .6rem;
        padding-bottom: .2rem;
        line-height: 1rem;
        position: relative;
    }
    .Button, a.Button, button, [type="button"], [type="reset"], [type="submit"] {
        color: #fff;
        background-color: #007aff;
    }
    .Button, button, [type="button"], [type="reset"], [type="submit"] {
        border: 0;
        cursor: pointer;
        padding: .5rem 2rem;
        display: inline-block;
        vertical-align: top;
        text-align: center;
        line-height: 2rem;
        width: auto;
        border-radius: 3rem;
    }
    .episodes-nav .Button.prev::before {
        position: absolute;
        left: 1rem;
        font-size: 1.25rem;
        top: 1.1rem;
    }
    .fa-arrow-left::before {
        content: "\f060";
    }
    [class*="fa-"]::before, .menu-item-has-children > a::after, .TPost .Image figure::before, .Frm-Slct > label::before, .tr-delete::before, .trselect-delete::before, .delete-com::before {
        font-family: 'font awesome 5 free';
        font-weight: 900;
        font-style: normal;
    }
    .episodes-nav .Button.prev {
        text-align: left;
    }
    .episodes-nav .Button:not(.list) {
        line-height: 1rem;
    }
    .Button, a.Button, button, [type="button"], [type="reset"], [type="submit"] {
        color: #fff;
    }
    .Button, button, [type="button"], [type="reset"], [type="submit"] {
        cursor: pointer;
        text-align: center;
        line-height: 2rem;
    }
    /*.Button siguiente*/
    .episodes-nav .Button:not(.list):not(:hover) {
        background-color: #1e2747;
    }
    .episodes-nav .Button.next {
        padding-right: 3rem;
        text-align: right;
        padding-left: 1.5rem;
    }
    .episodes-nav .Button:not(.list) {
        padding-top: .6rem;
        padding-bottom: .2rem;
        line-height: 1rem;
        position: relative;
    }
    .Button, a.Button, button, [type="button"], [type="reset"], [type="submit"] {
        color: #fff;
        background-color: #007aff;
    }
    .Button, button, [type="button"], [type="reset"], [type="submit"] {
        border: 0;
        cursor: pointer;
        padding: .5rem 2rem;
        display: inline-block;
        vertical-align: top;
        text-align: center;
        line-height: 2rem;
        width: auto;
        border-radius: 3rem;
    }
    .episodes-nav .Button.next::before {
        position: absolute;
        right: 1rem;
        font-size: 1.25rem;
        top: 1.1rem;
    }
    .fa-arrow-right::before {
        content: "\f061";
    }
    [class*="fa-"]::before, .menu-item-has-children > a::after, .TPost .Image figure::before, .Frm-Slct > label::before, .tr-delete::before, .trselect-delete::before, .delete-com::before {
        font-family: 'font awesome 5 free';
        font-weight: 900;
        font-style: normal;
    }
    /* imagen de fondo*/
    .backdrop > .Image {
        z-index: -1;
    }
    .MovieListSldCn .TPostMv .Image, .MovieListSldCn .TPostMv .Image img, .backdrop > .Image, .backdrop > .Image img {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 15%;
        top: 0;
    }
    figure {
        margin: 0 0 1.25rem;
    }
    /* .Image::after {
        background: linear-gradient(to bottom,rgba(8,15,40,0) 0%,rgba(8,15,40,1) 100%);
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        height: 100%;
        pointer-events: none;
    } */
    .TPost .Image figure > img, .backdrop > .Image img {
        object-position: 50% 50% !important;
    }
    .backdrop > .Image img {
        opacity: .5;
    }
    .MovieListSldCn .TPostMv .Image, .MovieListSldCn .TPostMv .Image img, .backdrop > .Image, .backdrop > .Image img {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 15%;
        top: 0;
    }
    .TPost .Image figure > img, .backdrop > .Image img {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top;
        border-radius: 5px;
    }
    img {
        vertical-align: middle;
        max-width: 100%;
    }
</style>

    <section class="iq-main-slider p-0" style="height: 100vh !important; z-index: 3 !important;">
        <div class="bd" style="position: relative; top: 100px;">
            <div class="backdrop" style="margin: 0 0 0 60px;">
                 <div class="video cont">
                    <h1 class="Title">{{$item->name}} <span>T{{$item->temporada_id}}x{{$item->nro_cap}}</span></h1>
                    <h2 class="SubTitle">{{$item->sub_name}}</h2>
                    <ul class="_1EGcQ_0 TPlayerNv tab_language_movie">
                        <li class="open_submenu actives">
                            <div>
                                <div>
                                    <span>Player</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class= "TPlayerCn BgA">
                        <div class="EcBgA">
                         
                            <div class="TPlayer embed_div">
                                <div class="TPlayerTb Current">
                                    <iframe class="no-you" data-src="{{$item->video}}" allowfullscreen="" src="{{$item->video}}" width="560" height="315" frameborder="0"></iframe>
                                </div>
                                {{-- <span class="fa-lightbulb lgtbx-lnk"></span> --}}
                               
                            </div>
                        </div>
                    </div>
                    <p>{{$item->sinopsis}}</p>
                    <span class="lgtbx"></span>
                    <div class="episodes-nav dfx jst-sb">
                        @if ($item->nro_cap === '1')
                            <a href="" class="Button prev fas fa-arrow-left" style="text-decoration: none; visibility: hidden;"><span>Capítulo <span>Siguiente</span></span></a>
                        @elseif(intval($item->nro_cap)>1)
                        <a href="/CineCorto/{{intval($item->nro_cap)-1}}" class="Button prev fas fa-arrow-left" style="text-decoration: none;"><span>Capítulo <span>Anterior</span></span></a>
                        @endif
                        <a href="/serie/CineCorto" class="Button list fas fa-list-ul"></a>
                        @if($item->nro_cap === '12')
                        <a href="/CineCorto/{{intval($item->nro_cap)-1}}" class="Button next fas fa-arrow-right" style="text-decoration: none; visibility: hidden;"><span>Capítulo <span>Anterior</span></span></a>
                         @elseif(intval($item->nro_cap)<12)
                         <a href="/CineCorto/{{intval($item->nro_cap)+1}}"  class="Button next fas fa-arrow-right"><span>Capítulo <span>Siguiente</span></span></a>
                         @endif
                    </div>
                 </div>
                 {{-- <div class="Image">
                    <figure class="Objf">
                        <img src="{{$item->cover}}" data-src="{{$item->cover}}" alt="img" class="lazy">
                    </figure>
                 </div> --}}
            </div>
        </div>
    </div>
    </section>
    @include('page::layouts.footer') 
@endsection


