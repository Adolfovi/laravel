<!doctype html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="./img/espartacoin.png">
        <title>Espartacoin</title>
        <meta name="description" content="descripción de la web, se recomienda 90 caracteres">
        <meta name="keywords" content="palabras clave, separadas, por comas">
        @include('front.layout.partials.style')
    </head>
    <body>

        @include('front.layout.partials.header')
        
        <main>
            <div class="banner">
                <div class="banner-image">
                    <img src="https://raw.githubusercontent.com/Adolfovi/espartacoin/main/img/banner.png">
                </div>
                <div class="banner-title">
                    <span>La nueva crypto luchadora</span>
                </div>
                <div class="banner-button">
                    <span>Compra Espartacoin</span>
                </div>
            </div>

            <div class="mobile-one-column">
                <div class="column center">
                    <h3 class="featured-text">Compra productos de nuestro merchandising!!</h3>
                </div>
                <div class="mobile-four-columns mobile-one-column desktop-four-columns">
                    <div class="column">
                        <div class="merchan-element">
                            <div class="merchan-element-image">
                                <img src="https://raw.githubusercontent.com/Adolfovi/espartacoin/main/img/camiseta.png">
                            </div>
                            <div class="merchan-element-title">
                                <h2>Camiseta</h2>
                            </div>
                            <div class="merchan-element-category">
                                <span>T-SHIRTS</span>
                            </div>
                            <div class="merchan-element-description">
                                <p>Camiseta de tela blanca con logo de crypto</p>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="merchan-element">
                            <div class="merchan-element-image">
                                <img src="https://raw.githubusercontent.com/Adolfovi/espartacoin/main/img/gorra.png">
                            </div>
                            <div class="merchan-element-title">
                                <h2>Gorra</h2>
                            </div>
                            <div class="merchan-element-category">
                                <span>HATS</span>
                            </div>
                            <div class="merchan-element-description">
                                <p>Gorra blanca de tela rugosa con logo de crypto</p>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="merchan-element">
                            <div class="merchan-element-image">
                                <img src="https://raw.githubusercontent.com/Adolfovi/espartacoin/main/img/fundamovil.png">
                            </div>
                            <div class="merchan-element-title">
                                <h2>Funda para móvil</h2>
                            </div>
                            <div class="merchan-element-category">
                                <span>SMARTPHONES</span>
                            </div>
                            <div class="merchan-element-description">
                                <p>Funda para móvil con logo de crypto</p>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="merchan-element">
                            <div class="merchan-element-image">
                                <img src="https://raw.githubusercontent.com/Adolfovi/espartacoin/main/img/reloj.png">
                            </div>
                            <div class="merchan-element-title">
                                <h2>Reloj de pulsera</h2>
                            </div>
                            <div class="merchan-element-category">
                                <span>WATCH</span>
                            </div>
                            <div class="merchan-element-description">
                                <p>Reloj con logo de crypto de fondo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-two-columns vertical-spaced">
                    <div class="column">
                        <div class="info-bottom">
                            <p>
                                Debido al temprano desarrollo de la criptomoneda,
                                dicha página web está en periodo de desarollo hasta que la criptomoneda
                                pueda ser aceptada por las comunidades tanto nacionales como internacionales.
                                Todo esto debido a la complejidad del proyecto y el equipo de desarrollo del
                                mismo.
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="image-spartacoin">
                            <img src="https://raw.githubusercontent.com/Adolfovi/espartacoin/main/img/espartaco.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </main>
         @include('front.layout.partials.js')
    </body>
</html>