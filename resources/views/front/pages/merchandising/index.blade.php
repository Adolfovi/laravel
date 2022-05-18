@extends('front.layout.master')

@section('content')

    @if($agent->isDesktop())
        @include('front.pages.merchandising.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.merchandising.mobile.mobile')
    @endif

@endsection