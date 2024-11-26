<!DOCTYPE html>
<html>
<head>
    <title>Портфоліо</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Головна</a> |
        <a href="{{ route('about') }}">Про нас</a> |
        <a href="{{ route('services') }}">Послуги</a> |
        <a href="{{ route('contact') }}">Контакти</a> |
        <a href="{{ route('portfolio') }}">Портфоліо</a>
    </nav>
    <div class="container">
        <h1>Наше портфоліо</h1>
    </div>
</body>
</html>
