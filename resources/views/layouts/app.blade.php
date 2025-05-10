<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Мой сайт')</title>
    <!-- Styles -->
    {{-- @vite(['resources/scss/app.scss', 'resources/js/app.js']) --}}
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

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
