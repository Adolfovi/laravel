@extends('front.layout.master')
@section('title')Carrito @endsection
@section('description')Compra Espartacoin, la mejor criptomoneda que puede existir @endsection
@section('content')
@section('page-title')Carrito de la compra @endsection

    @if($agent->isDesktop())
        @include('front.pages.cart.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.cart.mobile.mobile')
    @endif

@endsection