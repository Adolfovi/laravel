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
    <script type="module" src="dist/app.js"></script>
</body>

</html>