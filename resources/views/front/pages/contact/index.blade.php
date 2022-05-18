@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include('front.pages.contact.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.contact.mobile.mobile')
    @endif

@endsection