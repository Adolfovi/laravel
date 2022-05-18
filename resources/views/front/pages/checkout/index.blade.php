@extends('front.layout.master')
@section('title')Checking @endsection
@section('description')Compra Espartacoin, la mejor criptomoneda que puede existir @endsection
@section('content')

    @if($agent->isDesktop())
        @include('front.pages.checkout.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.checkout.mobile.mobile')
    @endif

@endsection