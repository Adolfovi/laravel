@extends('front.layout.master')
@section('title')Merchan @endsection
@section('description')Compra Espartacoin, la mejor criptomoneda que puede existir @endsection
@section('content')

    @if($agent->isDesktop())
        @include('front.pages.merchan.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.merchan.mobile.mobile')
    @endif

@endsection