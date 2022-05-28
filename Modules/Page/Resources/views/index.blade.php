@extends('page::layouts.master')

@section('content')
@include('page::navbar')

<style>
    @media (max-width: 767px)  {
        .original-content{
            display: none;
        }
    }
</style>

<!-- seccion del banner  -->
@include('page::banner')

<!-- Seccion de contenidos -->
@include('page::content.original-productions')

@include('page::content.infantiles')

@include('page::content.original-productions-mobile')

@endsection

