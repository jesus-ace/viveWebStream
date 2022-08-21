@extends('page::layouts.master')
@section('content')
{{-- @include('page::navbar') --}}

<style>
     .serie-content{
        position: relative;
        min-width: 100%;
        z-index: -1000;
        padding-bottom: 100px;
    }
    .serie-content::before{
        position: absolute;
        content: '';
        width: 100%;
        height: 100%;
        /* background: linear-gradient(rgba(255, 255, 255, 0.035), #030303); */
        /* background: linear-gradient(to bottom,rgba(8,15,40,0) 0%,rgba(8,15,40,1) 100%); */
        top: 0;
        left: 0;
        z-index: -1000;
    }
    .addlist > .Button {
        padding: .5rem .7rem;
        width: 100%;
        border-radius: .3rem;
        text-align: left;
        /* background-color: #1e2747; */
        background-color: #0066CC;
        font-size: .75rem;
        border: none;
        color: #fff;

        border: 0;
        cursor: pointer;
        padding: .5rem 2rem;
        display: inline-block;
        vertical-align: top;
        text-align: center;
        line-height: 2rem;

        font-size: 1rem;
        padding: .5rem 1rem
    }

    .addlist > .Button > i {
        color: #fff;
        float: left;
        margin-right: .5rem;
    }
    .addlist > .Button .ddw {
        float: right;
        color: #fff;
        float: right;
        margin-right: 0;
        font-size: .65rem;
    }
    .tvshow {
        position: relative;
        margin-top: 1rem;
        padding-left: 67px;
        padding-top: 12px;
    }
    .tvshow::before {
        width: 56px;select-season
        height: 60px;
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        background: url(/image/tv.png) no-repeat;
    }

    main > section {
        margin-bottom: 4rem;
    }
    .select-season {
        margin-bottom: 2.5rem;
    }
  
    .select-season > span {
        float: left;
        padding: .5rem 1.5rem .5rem 1.25rem;
        border-radius: 3px;
        background-color: #0066cc5d;
        color: #fff;
        margin-right: -.5rem;
        line-height: calc(2rem - 2px);
    }
    .select-season > select {
        float: left;
        width: auto;
        border-radius: 3px;
        background-color: #0066CC;
        border: 0;
    }
    input, textarea, select {
        border: 1px solid #1e2747;
        background-color: #1e2747;
        color: #8da0bc;
    }
    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-image: url(data:image/svg+xml;base64,PHN2ZyBmaWxsPScjMDA3QUZGJyB2aWV3Qm94PScwIDAgMjQgMjQnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zyc+PHBhdGggZD0nTTcuNDEgNy44NEwxMiAxMi40Mmw0LjU5LTQuNThMMTggOS4yNWwtNiA2LTYtNnonLz48cGF0aCBkPSdNMC0uNzVoMjR2MjRIMHonIGZpbGw9J25vbmUnLz48L3N2Zz4=);
        background-position: right 1rem center;
        background-repeat: no-repeat;
        background-size: 1.5rem;
        padding-right: 3rem !important;
    }
    input, textarea, select {
        display: block;
        padding: .5rem 1.5rem;
        padding-right: 1.5rem;
        width: 100%;
        line-height: calc(2rem - 2px) !important;
        border-radius: 3rem;
    }
    button, input, select, textarea {
        font: inherit;
        line-height: inherit ;
        width: 100%;
        vertical-align: middle;
        line-height: normal;
        text-transform: none;
        overflow: visible;
        color: inherit;
        transition: .2s;
    }
    .select-season::after {
        clear: both;
        display: block;
        overflow: hidden;
        content: '';
    }
    input, textarea, select {
        color: #8da0bc;
    }
    input, textarea, select {
        line-height: calc(2rem - 2px);
    }
    button, input, select, textarea {
        font: inherit;
            line-height: inherit;
        line-height: normal;
        text-transform: none;
        color: inherit;
    }

    /* episodios estilos */

    section > .MovieList:last-child {
        margin-bottom: -2.5rem;
    }
    .MovieList.Rows, .people-List {
        margin-left: -.5rem;
        margin-right: -.5rem;
    }

    .fwp, .MovieList.Rows, .people-List, .frm-cols {
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
    }
    
    .dfx, .MovieList.Rows, .people-List, .frm-cols {
        display: -webkit-flex;
        display: flex;
    }

    nav ul, [class*="List"] {
        margin: 0;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        padding: 0;
    }

    .MovieList.Rows > li, .people-List > li {
        padding-left: .5rem;
        padding-right: .5rem;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 50%;
        margin-bottom: 2rem;
    }
    nav li, [class*="List"] li {
        list-style-type: none;
    }
</style>

<div class="main-content" >
    @include('page::section-series.serie')
</div>

@include('page::layouts.footer') 
@endsection