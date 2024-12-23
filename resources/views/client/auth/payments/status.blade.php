@extends('index')
@section('content')
    @include('components.navbar-auth')
    @if (!$orders)
        @include('client.auth.payments.empty')
    @elseif ($orders->payment_status == 'Lunas' || $orders->payment_status == 'Dibatalkan')
        @include('client.auth.payments.empty')
    @else
        @include('client.auth.payments.payment')
    @endif
@endsection
