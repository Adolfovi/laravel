<div class="merchandising">
    <div class="mobile-two-columns-aside desktop-two-columns-aside">
        <div class="column-aside">
            <div class="category-merchans-container">
                <div class="category-merchans-title">
                    <h2>@yield('page-title')</h2>
                </div>
                <form action="/merchan.php">
                    <select name="type-products" id="type-products">
                        <option value="todos"><span>Todos</span></option>
                        <option value="camisetas"><span>Camisetas</span></option>
                        <option value="gorras"><span>Gorras</span></option>
                        <option value="fundas-movil"><span>Fundas de móvil</span></option>
                        <option value="relojes"><span>Relojes</span></option>
                    </select>
                </form>
            </div>
        </div>
        <div class="column-main">
            <div class="results-products-container">
                <div class="results-products-info">
                    <div class="results-products-total">
                        <span>Se están enseñando 20 de 100 productos</span>
                    </div>
                    <div class="results-products-selector">
                    </div>
                </div>
                <div class="results-products-elements">
                    @if(isset($products))
                        @foreach($products as $product)
                    <div class="element">
                        <div class="element-image">
                            <img src="img/reloj.png">
                        </div>
                        <div class="element-price">
                            <span>{{$product->price}}€</span>
                        </div>
                        <div class="element-name">
                            <span>{{$product->name}}</span>
                        </div>
                        <div class="element-see">
                            <button>
                                <a href="merchan-product.html">Ver producto</a>
                            </button>
                        </div>
                    </div>               
                        @endforeach
                    @endif                    
                </div>
            </div>
        </div>
    </div>
</div>