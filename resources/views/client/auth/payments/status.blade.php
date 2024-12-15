@extends('index')
@section('content')
    @include('components.navbar-auth')
    @if ($orders->payment_status == "Lunas")
        @include('client.auth.payments.empty')
    @else
        @include('client.auth.payments.payment')
    @endif
@endsection
