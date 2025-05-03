<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Мой сайт')</title>
    <!-- Styles -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="app">
        @include('components.sidebar')
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>
