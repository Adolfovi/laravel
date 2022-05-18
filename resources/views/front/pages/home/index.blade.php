@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include('front.pages.home.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.home.mobile.mobile')
    @endif

@endsection