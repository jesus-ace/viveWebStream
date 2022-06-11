@extends('page::layouts.master')
@section('content')
@include('page::navbar')
<div class="main-content">
    @include('page::section-series.serie')
</div>

@include('page::layouts.footer') 
@endsection