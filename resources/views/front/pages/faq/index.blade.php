@extends('front.layout.master')
@section('title')FAQ @endsection
@section('description')Compra Espartacoin, la mejor criptomoneda que puede existir @endsection
@section('content')

    @if($agent->isDesktop())
        @include('front.pages.faq.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.faq.mobile.mobile')
    @endif

@endsection