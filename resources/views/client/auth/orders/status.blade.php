@extends('index')
@section('content')
    @include('components.navbar-auth')
    @if ($orders->count() > 0)
        @include('client.auth.orders.order')
    @else
        @include('components.empty')
    @endif
@endsection
