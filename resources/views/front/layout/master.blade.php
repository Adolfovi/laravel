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
        @yield('content')
    </main>
    @include('front.layout.partials.js')
</body>
</html>