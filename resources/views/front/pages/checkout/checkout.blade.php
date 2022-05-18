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
    @include('front.layout.partials.js')
</body>

</html>