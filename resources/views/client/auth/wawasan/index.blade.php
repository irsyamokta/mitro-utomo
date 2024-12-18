@extends('index')
@section('content')
    @include('components.navbar-auth')
    @include('client.auth.wawasan.video')
    @include('client.auth.wawasan.document')
    @include('components.footer-auth')
@endsection