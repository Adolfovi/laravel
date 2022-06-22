@extends('front.layout.master')
@section('title')Merchandising @endsection
@section('description')Compra Espartacoin, la mejor criptomoneda que puede existir @endsection
@section('content')
@section('page-title')Categorías @endsection


    @if($agent->isDesktop())
        @include('front.pages.salemade.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.salemade.mobile.mobile')
    @endif

@endsection