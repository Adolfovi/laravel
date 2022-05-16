<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/espartacoin.png">
    <title>Espartacoin</title>
    <meta name="description" content="descripción de la web, se recomienda 90 caracteres">
    <meta name="keywords" content="palabras clave, separadas, por comas">
    <link class="responsive" href="style/app.css" rel="stylesheet">    
</head>

<body>
    <header>
        <div id="nav-menu-mobile" class="mobile-only">
            <ul>
                <li><a href="index.html">INICIO</a></li>
                <li><a href="merchandising.html">MERCHANDISING</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contacto.html">CONTACTO</a></li>
            </ul>
        </div>
        <div class="mobile-two-columns" style="flex-direction: row;">
            <div class="column">
                <div class="middle-header-left-side">
                    <div class="middle-header-left-side-image">
                        <img src="img/espartacoin.png">
                    </div>

                    <div class="middle-header-left-side-title">
                        <h2><a href="index.html">ESPARTACOIN</a></h2>
                    </div>
                </div>
            </div>

            <div class="column">
                <div id="hamburger-menu-button">
                    <svg viewBox="0 0 32 22.5">
                        <g id="hamburger-menu-button-svg">
                            <path class="bar" d="M20.945,8.75c0,0.69-0.5,1.25-1.117,1.25H3.141c-0.617,0-1.118-0.56-1.118-1.25l0,0
                                c0-0.69,0.5-1.25,1.118-1.25h16.688C20.445,7.5,20.945,8.06,20.945,8.75L20.945,8.75z">
                            </path>
                            <path class="bar" d="M20.923,15c0,0.689-0.501,1.25-1.118,1.25H3.118C2.5,16.25,2,15.689,2,15l0,0c0-0.689,0.5-1.25,1.118-1.25 h16.687C20.422,13.75,20.923,14.311,20.923,15L20.923,15z">
                            </path>
                            <path class="bar" d="M20.969,21.25c0,0.689-0.5,1.25-1.117,1.25H3.164c-0.617,0-1.118-0.561-1.118-1.25l0,0
                                c0-0.689,0.5-1.25,1.118-1.25h16.688C20.469,20,20.969,20.561,20.969,21.25L20.969,21.25z">
                            </path>
                            <rect width="20" height="20" fill="none"></rect>
                        </g>
                    </svg>
                </div>
                <div class="nav-menu desktop-only">
                    <ul>
                        <li><a href="index.html">INICIO</a></li>
                        <li><a href="merchandising.html">MERCHANDISING</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="contacto.html">CONTACTO</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="merchan-product">
            <div class="mobile-two-columns desktop-two-columns">
                <div class="column">
                    <div class="mobile-one-column desktop-one-column">
                        <div class="column">
                            <div class="image-merchan-product">
                                <div class="image-merchan-product-image">
                                    <img src="img/reloj.png">
                                </div>
                            </div>
                            <div class="images-merchan-product">
                                <div class="images-merchan-product-image">
                                    <img src="img/reloj.png">
                                </div>
                                <div class="images-merchan-product-image">
                                    <img src="img/reloj.png">
                                </div>
                                <div class="images-merchan-product-image">
                                    <img src="img/reloj.png">
                                </div>
                                <div class="images-merchan-product-image">
                                    <img src="img/reloj.png">
                                </div>
                                <div class="images-merchan-product-image">
                                    <img src="img/reloj.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="info-merchan-product">
                        <div class="info-merchan-product-title">
                            <h2>Reloj Espartacoin</h2>
                        </div>
                        <div class="info-merchan-product-price">
                            <span>14.99€</span>
                        </div>
                        <div class="types-container">
                            <div class="types">
                                <select class="select-type" name="type">
                                    <option value="description">Descripción</option>
                                    <option value="feature">Características</option>
                                    <option value="opinion">Opiniones</option>
                                </select>
                            </div>
                            <div class="types-related">
                                <div class="type-related active" data-elementtype="description">
                                    <p>Reloj Espartacoin de marca Gucci modelo Big-Bang con incrustación de la imagen de la
                                        criptomoneda de fondo, realzando la imagen de la misma. Tamaño normal. Unisex.</p>
                                </div>
                                <div class="type-related" data-elementtype="feature">
                                    <p>
                                        Marca: Sin marca, color: gris, tamaño: normal, unisex.
                                    </p>
                                </div>
                                <div class="type-related" data-elementtype="opinion">
                                    <p>Raul: Gran producto, 5 estrellas.</p>
                                    <p>Marco Polo: Me gusta, 3 estrellas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="info-merchan-product-quantity plus-minus-button">
                                <button class="quantity-minus">-</button>
                            <form>
                                <div>
                                    <input class="input-quantity" value="1">
                                </div>
                            </form>
                                <button class="quantity-plus">+</button>
                        </div>
                        <div class="info-merchan-product-buy">
                            <button class="buy-product">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="module" src="dist/app.js"></script>
</body>

</html>