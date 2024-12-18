@extends('index')
@section('content')
    @include('components.navbar-auth')
    @include('client.auth.sections.hero')
    @include('client.auth.sections.service')
    @include('client.auth.sections.product')
    @include('components.footer-auth')
@overwrite