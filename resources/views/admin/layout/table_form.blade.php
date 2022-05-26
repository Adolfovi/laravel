@extends('admin.layout.master')

@section('content')

    <div class="desktop-two-columns-aside mobile-two-columns-aside">
        <div class="column-aside">
            <div class="elements-configuration">
                @yield('table')
            </div>
        </div>

        <div class="column-main">
            <div class="administration-editor">
                
                @yield('form')
            
            </div>
        </div>
    </div>

@endsection