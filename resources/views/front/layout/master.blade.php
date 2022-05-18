<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/espartacoin.png">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="crypto, espartacoin, money, cryptomoney">
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