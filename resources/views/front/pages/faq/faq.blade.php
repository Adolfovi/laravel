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
        <div class="main-title">
            <h2>Preguntas y respuestas</h2>
        </div>
        <div class="faqs-container">
            <div class="faqs">
                <div class="faq-element">
                    <div class="faq-main">
                        <div class="faq-title">
                            <h3>¿Como compro Espartacoin?</h3>
                        </div>
                        <div class="faq-arrow">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="#C34400"
                                    d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M7,10L12,15L17,10H7Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-submain">
                        <span>Todavía no se puede comprar Espartacoin ya que no existe dicha criptomomenda y es bastante
                            improbable de que aparezca en un posible futuro cercano.</span>
                    </div>
                </div>
                <div class="faq-element">
                    <div class="faq-main">
                        <div class="faq-title">
                            <h3>¿Sois algo legalmente real?</h3>
                        </div>
                        <div class="faq-arrow">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="#C34400"
                                    d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M7,10L12,15L17,10H7Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-submain">
                        <span>No somos ninguna entidad real ni la criptomoneda es real.</span>
                    </div>
                </div>
                <div class="faq-element">
                    <div class="faq-main">
                        <div class="faq-title">
                            <h3>¿Puedo comprar merchandising?</h3>
                        </div>
                        <div class="faq-arrow">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="#C34400"
                                    d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M7,10L12,15L17,10H7Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-submain">
                        <span>No se puede ya que no existen dichos productos.</span>
                    </div>
                </div>
                <div class="faq-element">
                    <div class="faq-main">
                        <div class="faq-title">
                            <h3>¿Sois algún tipo de estafa?</h3>
                        </div>
                        <div class="faq-arrow">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="#C34400"
                                    d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M7,10L12,15L17,10H7Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-submain">
                        <span>No, ya que ni siquiera no existimos y si existieramos jamás seriamos una estafa.</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('front.layout.partials.js')
</body>

</html>