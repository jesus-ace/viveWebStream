@extends('page::layouts.master')

@section('content')
{{-- @include('page::navbar') --}}

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
<div class="main-content">
    @include('page::content.original-productions')
    @include('page::content.infantiles')
    {{-- @include('page::content.more-popular') --}}
    @include('page::content.familiares')
    @include('page::content.123tv')
    @include('page::content.vertical-productions')
</div>

{{-- @include('page::content.123tv')

@include('page::content.original-productions-mobile')--}}

@include('page::layouts.footer') 


@endsection

