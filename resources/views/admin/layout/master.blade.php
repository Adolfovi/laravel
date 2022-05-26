<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel de Administración</title>
        @if($agent->isDesktop())
            <link rel="stylesheet" href="{{ mix('admin/css/desktop/app.css') }}">
        @endif
        @if($agent->isMobile())
            <link rel="stylesheet" href="{{ mix('admin/css/mobile/app-mobile.css') }}">
        @endif
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <header>
            <div class="desktop-two-columns mobile-two-columns">
                <div class="column">
                    <div class="header-main-title">
                        <h2>PANEL DE ADMINISTRACIÓN</h2>
                    </div>
                </div>
                <div class="column">
                    <div class="header-main-title-hamburger">
                        <div id="nav-icon3">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="admin-panel-nav-menu">
                    <a href="/administrator">
                        Inicio
                    </a>
                    <a href="administrator/merchandising">
                    Merchandising 
                    </a>
                    <a href="administrator/faq">
                        FAQ 
                    </a>
                    <a href="administrator/contacto">    
                    Contacto 
                    </a>
                    <a href="administrator/merchan-product">
                        Merchan-product 
                    </a>
                    <a href="administrator/checking">
                        Checking
                    </a>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="desktop-one-column">
                <div class="column">
                    <div class="filter-main">
                        <svg style="width:28px;height:28px" viewBox="0 0 24 24">
                            <path fill="black"
                                d="M11 11L16.76 3.62A1 1 0 0 0 16.59 2.22A1 1 0 0 0 16 2H2A1 1 0 0 0 1.38 2.22A1 1 0 0 0 1.21 3.62L7 11V16.87A1 1 0 0 0 7.29 17.7L9.29 19.7A1 1 0 0 0 10.7 19.7A1 1 0 0 0 11 18.87V11M13 16L18 21L23 16Z" />
                        </svg>
                    </div>
                </div>
            </div>

           @yield('content')
        </main>

        @if($agent->isDesktop())
            <script type="module" src="{{ mix('admin/js/desktop/app.js') }}"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
            <script>
                WebFont.load({
                    google: {
                        families: ['Roboto Condensed', 'Roboto']
                    }
                });        
            </script>
        @endif

        @if($agent->isMobile())
            <script type="module" src="{{ mix('admin/js/desktop/app.js') }}"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
            <script>
                WebFont.load({
                    google: {
                        families: ['Roboto Condensed', 'Roboto']
                    }
                });        
            </script>
        @endif
    </body>
</html>