<div class="page-section" id="checkout">
    <div class="checkout">
    <form class="checking-admin-form" action="{{route('checking_product_save')}}">
        <div class="mobile-one-column desktop-one-column">
            <div class="column">
                <div class="checkout-title">
                    <h2>@yield('page-title')</h2>
                </div>
            </div>
        </div>
        <div class="mobile-two-columns desktop-two-columns">
            <div class="column">
                <div class="checkout-form">
                        <div class="mobile-two-columns desktop-two-columns">
                            <div class="column">
                                <div class="checkout-form-element">
                                    <label for="firstname">Nombre</label>
                                    <input class="input-form" type="text" name="name">
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
                                    <input class="input-form" type="text" name="email">
                                </div>
                                <div class="checkout-form-element">
                                    <label for="postalcode">Código Postal</label>
                                    <input class="input-form" type="text" name="postal_code">
                                </div>

                            </div>

                        </div>
                        <div class="mobile-one-column desktop-one-column">
                                <div class="column">
                                    <div class="checkout-form-element">
                                    <label for="city">País</label>
                                    <input class="input-form" type="text" name="country">
                                </div>
                                </div>
                        </div>
                        <div class="mobile-one-column desktop-one-column">
                            <div class="column">
                                <div class="checkout-form-element">

                                    <label for="postalcode">Dirección</label>

                                    <input class="input-form" type="text" name="address">

                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="column">
                @if(isset($taxes))
                @foreach($taxes as $tax)
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
                                <span>{{$tax->type}}</span>
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
                                <span>{{$total->sum('base_price')}}€</span>
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
                                <span>{{$total->sum('base_price') + ($total->sum('base_price') * $tax->type)}}€</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                <div class="pay-options">
                    <input type="radio" name="age" value="1">
                    <label for="age1">Transferencia Bancaria</label><br>
                    <input type="radio" name="age" value="2">
                    <label for="age2">Paypal</label><br>
                    <input type="radio" id="age3" name="age" value="3">
                    <label for="age3">Tarjeta de Crédito</label><br><br>
                    <button class="pay-continue" href="{{route('sale_made')}}">Pagar</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>