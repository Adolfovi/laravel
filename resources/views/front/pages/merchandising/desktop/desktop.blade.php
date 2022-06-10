<div class="merchandising">
    <div class="mobile-two-columns-aside desktop-two-columns-aside">
        <div class="column-aside">
            <div class="category-merchans-container">
                <div class="category-merchans-title">
                    <h2>@yield('page-title')</h2>
                </div>
                <form action="/merchan.php">
                    <select name="type-products" id="type-products" data-url="front-categoryproduct">
                        <option value="todos"><span>Todos</span></option>
                        @if(isset($productswithoutfilters))
                        @foreach($productswithoutfilters as $product)
                        <option value="{{$product->category_name}}">
                            <span>{{$product->category_name}}</span>
                        </option>
                        @endforeach
                        @endif
                    </select>
                </form>
            </div>
        </div>
        <div class="column-main">
            <div class="results-products-container">
                <div class="results-products-info">
                    <div class="results-products-total">
                        <span>Se están enseñando {{$products->count()}} de {{$products->count()}} productos</span>
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
                                <div class="element-categoryname">
                                    <span>{{$product->category_name}}</span>
                                </div>
                                <div class="element-see">
                                    <button class="view-product" data-url="{{route('front_product', ['product' => $product->id])}}">
                                        Ver producto
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