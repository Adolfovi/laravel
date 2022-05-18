@extends('front.layout.master')
@section('title')Espartacoin @endsection
@section('description')Compra Espartacoin, la mejor criptomoneda que puede existir @endsection
@section('content')

    @if($agent->isDesktop())
        @include('front.pages.home.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.home.mobile.mobile')
    @endif

@endsection