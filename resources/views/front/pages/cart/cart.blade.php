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
        <div class="cart">
            <div class="mobile-one-column desktop-one-column">
                <div class="column">
                    <div class="cart-title">
                        <h2>Carrito de la compra</h2>
                    </div>
                </div>
            </div>
            <table>
                <tr>
                    <td class="cart-elements"></td>
                    <td class="cart-elements">Producto</td>
                    <td class="cart-elements">Precio</td>
                    <td class="cart-elements">Cantidad</td>
                </tr>
                <tr>
                    <td class="cart-products">
                        <div class="cart-image">
                            <img src="img/reloj.png">
                        </div>
                    </td>
                    <td class="cart-products">
                        <div class="cart-name">
                            <h4>Reloj Espartacoin</h4>
                        </div>
                    </td>
                    <td class="cart-products">
                        <div>
                            <h4>14.99€</h4>
                        </div>
                    </td>
                    <td class="cart-products">
                        <div class="cart-quantity">
                            <div class="info-merchan-product-quantity plus-minus-button">
                                <button class="quantity-minus">-</button>
                                <form>
                                    <div>
                                        <input value="1" class="input-quantity">
                                    </div>
                                </form>
                                <button class="quantity-plus">+</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="cart-products">
                        <div class="cart-image">
                            <img src="img/reloj.png">
                        </div>
                    </td>
                    <td class="cart-products">
                        <div class="cart-name">
                            <h4>Reloj Espartacoin</h4>
                        </div>
                    </td>
                    <td class="cart-products">
                        <div>
                            <h4>14.99€</h4>
                        </div>
                    </td>
                    <td class="cart-products">
                        <div class="cart-quantity">
                            <div class="info-merchan-product-quantity plus-minus-button">
                                <button class="quantity-minus">-</button>
                                <form>
                                    <div>
                                        <input value="1" class="input-quantity">
                                    </div>
                                </form>
                                <button class="quantity-plus">+</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>

            <div class="mobile-two-columns desktop-two-columns">
                <div class="column"></div>
                <div class="column">
                    <div class="cart-finishing-container">
                        <div class="cart-finishing">
                            <div class="cart-finishing-title">
                                <span>Resumen de la compra</span>
                            </div>
                            <div class="mobile-two-columns desktop-two-columns">
                                <div class="column">
                                    <div class="cart-finishing-iva-title"><span>IVA</span></div>
                                </div>
                                <div class="column">
                                    <div class="cart-finishing-iva-result">
                                        <span>20€</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-two-columns desktop-two-columns">
                                <div class="column">
                                    <div class="cart-finishing-price-title">
                                        <span>Precio total</span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="cart-finishing-price-title">
                                        <span>29.98€</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-two-columns desktop-two-columns">
                                <div class="column">
                                    <div class="cart-finishing-total-title">
                                        <span>Total</span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="cart-finishing-total-result">
                                        <span>49.98€</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-buttons">
                <div class="mobile-two-columns desktop-two-columns">
                    <div class="column"></div>
                    <div class="column">
                        <div class="mobile-two-columns desktop-two-columns">
                            <div class="column">
                                <div class="return">
                                    <button><a href="index.html">Volver</a></button>
                                </div>
                            </div>
                            <div class="column">
                                <div class="cart-buy">
                                    <button><a href="checkout.html">Comprar</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('front.layout.partials.js')
</body>

</html>