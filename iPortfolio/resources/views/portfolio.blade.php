@extends('layout.app')
@section('content')
@include('partials.header')
@include('partials.hero')
<main id="main">
    @include('partials.about')
    @include('partials.fact')
    @include('partials.skill')
    @include('partials.resume')
    @include('partials.portfolioSection')
    @include('partials.service')
    @include('partials.contact')
    @include('partials.footer')
@endsection