@extends('page::layouts.master')

@section('content')
@include('page::navbar')

<!-- seccion del banner  -->
@include('page::banner')

<!-- Seccion de contenidos -->
@include('page::content.original-productions')

@include('page::content.infantiles')

@endsection

