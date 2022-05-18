@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include('front.pages.faq.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.faq.mobile.mobile')
    @endif

@endsection