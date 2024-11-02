@extends('index')
@section('content')
    @include('components.navbar-auth')
    @include('client.auth.sections.hero')
    @include('client.auth.sections.product-bio')
    @include('client.auth.sections.product-degra')
    @include('components.footer-auth')
@overwrite