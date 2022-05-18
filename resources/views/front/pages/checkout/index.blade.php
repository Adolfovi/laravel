@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include('front.pages.checkout.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.checkout.mobile.mobile')
    @endif

@endsection