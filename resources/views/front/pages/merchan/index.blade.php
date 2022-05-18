@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include('front.pages.merchan.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.merchan.mobile.mobile')
    @endif

@endsection