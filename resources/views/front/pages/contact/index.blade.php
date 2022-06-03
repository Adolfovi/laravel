@extends('front.layout.master')

@section('title')Contacto @endsection
@section('description')Compra Espartacoin, la mejor criptomoneda que puede existir @endsection

@section('content')
    
    @section('page-title')Contacte con nosotros @endsection

    @if($agent->isDesktop())
        @include('front.pages.contact.desktop.desktop')
    @endif
    
    @if($agent->isMobile())
        @include('front.pages.contact.mobile.mobile')
    @endif

@endsection

