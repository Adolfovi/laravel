@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include('front.pages.cart.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.cart.mobile.mobile')
    @endif

@endsection