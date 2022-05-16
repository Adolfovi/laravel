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
        <div class="checkout">

            <div class="mobile-one-column desktop-one-column">
                <div class="column">
                    <div class="checkout-title">
                        <h2>Finalizar compra</h2>
                    </div>
                </div>
            </div>

            <div class="mobile-two-columns desktop-two-columns">
                <div class="column">
                    <div class="checkout-form">
                        <form>
                            <div class="mobile-two-columns desktop-two-columns">
                                <div class="column">
                                    <div class="checkout-form-element">
                                        <label for="firstname">Nombre</label>
                                        <input class="input-form" type="text" name="firstname">
                                    </div>
                                    <div class="checkout-form-element">
                                        <label for="telephone">Teléfono</label>
                                        <input class="input-form" type="text" name="telephone">
                                    </div>
                                    <div class="checkout-form-element">
                                        <label for="city">Ciudad</label>
                                        <input class="input-form" type="text" name="city">
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="checkout-form-element">
                                        <label for="surname">Apellidos</label>
                                        <input class="input-form" type="text" name="surname">
                                    </div>
                                    <div class="checkout-form-element">
                                        <label for="mail">Email</label>
                                        <input class="input-form" type="text" name="mail">
                                    </div>
                                    <div class="checkout-form-element">
                                        <label for="postalcode">Código Postal</label>
                                        <input class="input-form" type="text" name="postalcode">
                                    </div>

                                </div>

                            </div>

                            <div class="mobile-one-column desktop-one-column">
                                <div class="column">
                                    <div class="checkout-form-element">

                                        <label for="postalcode">Dirección</label>

                                        <input class="input-form" type="text" name="direction">

                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                <div class="column">
                    <div class="buy-finishing">

                        <div class="buy-finishing-title">
                            <h4>Resumen de la compra</h4>
                        </div>
                        <div class="mobile-two-columns desktop-two-columns">
                            <div class="column">
                                <div class="buy-finishing-iva-text">
                                    <span>IVA</span>
                                </div>
                            </div>
                            <div class="column">
                                <div class="buy-finishing-iva-result">
                                    <span>20€</span>
                                </div>
                            </div>
                        </div>

                        <div class="mobile-two-columns desktop-two-columns">
                            <div class="column">
                                <div class="buy-finishing-price-text">
                                    <span>Precio</span>
                                </div>
                            </div>
                            <div class="column">
                                <div class="buy-finishing-price-result">
                                    <span>0€</span>
                                </div>
                            </div>
                        </div>

                        <div class="mobile-two-columns desktop-two-columns">
                            <div class="column">
                                <div class="buy-finishing-total-text">
                                    <span>Total</span>
                                </div>
                            </div>
                            <div class="column">
                                <div class="buy-finishing-total-result">
                                    <span>20€</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pay-options">
                        <input type="radio" name="age" value="bank-transfer">
                        <label for="age1">Transferencia Bancaria</label><br>
                        <input type="radio" name="age" value="paypal">
                        <label for="age2">Paypal</label><br>
                        <input type="radio" id="age3" name="age" value="credit-card">
                        <label for="age3">Tarjeta de Crédito</label><br><br>
                        <button class="pay-continue" type="submit">Pagar</button>
                    </div>
                    </form>

                </div>
            </div>

        </div>
    </main>
    <script type="module" src="dist/app.js"></script>
</body>

</html>