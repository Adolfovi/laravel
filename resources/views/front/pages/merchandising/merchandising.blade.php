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
    @include('front.layout.partials.header')
    <main>
        <div class="merchandising">
            <div class="mobile-two-columns-aside desktop-two-columns-aside">
                <div class="column-aside">
                    <div class="category-merchans-container">
                        <div class="category-merchans-title">
                            <h2>Categorias</h2>
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
                            <div class="element">
                                <div class="element-image">
                                    <img src="img/reloj.png">
                                </div>
                                <div class="element-price">
                                    <span>14.99€</span>
                                </div>
                                <div class="element-name">
                                    <span>Reloj Espartacoin</span>
                                </div>
                                <div class="element-see">
                                    <button>
                                        <a href="merchan-product.html">Ver producto</a>
                                    </button>
                                </div>
                            </div>
                            <div class="element">
                                <div class="element-image"><img src="img/reloj.png"></div>
                                <div class="element-price"><span>14.99€</span></div>
                                <div class="element-name"><span>Reloj Espartacoin</span></div>
                                <div class="element-see"><button><a href="merchan-product.html">Ver
                                            producto</a></button></div>
                            </div>
                            <div class="element">
                                <div class="element-image"><img src="img/reloj.png"></div>
                                <div class="element-price"><span>14.99€</span></div>
                                <div class="element-name"><span>Reloj Espartacoin</span></div>
                                <div class="element-see"><button><a href="merchan-product.html">Ver
                                            producto</a></button></div>
                            </div>
                            <div class="element">
                                <div class="element-image"><img src="img/reloj.png"></div>
                                <div class="element-price"><span>14.99€</span></div>
                                <div class="element-name"><span>Reloj Espartacoin</span></div>
                                <div class="element-see"><button><a href="merchan-product.html">Ver
                                            producto</a></button></div>
                            </div>
                            <div class="element">
                                <div class="element-image"><img src="img/reloj.png"></div>
                                <div class="element-price"><span>14.99€</span></div>
                                <div class="element-name"><span>Reloj Espartacoin</span></div>
                                <div class="element-see"><button><a href="merchan-product.html">Ver
                                            producto</a></button></div>
                            </div>
                            <div class="element">
                                <div class="element-image"><img src="img/reloj.png"></div>
                                <div class="element-price"><span>14.99€</span></div>
                                <div class="element-name"><span>Reloj Espartacoin</span></div>
                                <div class="element-see"><button><a href="merchan-product.html">Ver
                                            producto</a></button></div>
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