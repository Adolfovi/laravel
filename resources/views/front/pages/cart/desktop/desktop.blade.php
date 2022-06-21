<div class="cart">
    <div class="mobile-one-column desktop-one-column">
        <div class="column">
            <div class="cart-title">
                <h2>@yield('page-title')</h2>
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
        @if (isset($carts))
            @foreach ($carts as $cart)
                <tr>
                    <td class="cart-products">
                        <div class="cart-image">

                        </div>
                    </td>
                    <td class="cart-products">
                        <div class="cart-name">
                            <h4>{{$cart->price->product->title}}</h4>
                        </div>
                    </td>
                    <td class="cart-products">
                        <div>
                            <h4>{{$cart->price->base_price}}</h4>
                        </div>
                    </td>
                    <td class="cart-products">
                        <div class="cart-quantity">
                            <div class="info-merchan-product-quantity plus-minus-button">
                                <button class="cart-plus-minus-button" data-url="{{route('front_cart_plus', ['fingerprint' => $fingerprint, 'price_id' => $cart->price_id])}}">-</button>
                                <div>
                                    <input class="input-quantity" value="{{$cart->quantity}}">
                                </div>
                                <button class="cart-plus-minus-button"  data-url="{{route('front_cart_minus', ['fingerprint' => $fingerprint, 'price_id' => $cart->price_id])}}">+</button>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>

    <div class="mobile-two-columns desktop-two-columns">
        <div class="column"></div>
        <div class="column">
            @if (isset($taxes))
            @foreach ($taxes as $tax)
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
                                <span>{{$tax->type}}</span>
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
                                <span>{{$total->sum('base_price')}}€</span>
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
                                <span>{{$total->sum('base_price') - ($total->sum('base_price') * $tax->type)}}€</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
                @endif
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