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
    @include('front.layout.partials.style')
</head>

<body>
    @include('front.layout.partials.header')
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
    @include('front.layout.partials.js')
</body>

</html>