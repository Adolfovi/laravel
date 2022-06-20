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
                    <h2>{{$product->title}}</h2>
                </div>
                <div class="info-merchan-product-category">
                    <h2>{{$product->category->title}}</h2>
                </div>
                <div class="info-merchan-product-price">
                    <span>45€</span>
                </div>
                @include('front.components.tabs')

                <form class="form-product-buy" action="{{route('front_product_buy')}}">
                    <input type="hidden" name="price_id" value="{{$product->prices->first()->id}}">
                    <div class="info-merchan-product-quantity plus-minus-button">
                    <button class="quantity-minus">-</button>
                        
                    <div>
                            
                            <input class="input-quantity" name="amount" value="1">
                        </div>
                        
                        <button class="quantity-plus">+</button>
                    </div>
                    
                </form>
                <div class="info-merchan-product-buy">
                    <button class="buy-product">Comprar</button>
                </div>
            </div>
        </div>
    </div>
</div>
