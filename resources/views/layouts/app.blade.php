<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Мой сайт')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        {{-- Header --}}
        @include('components.header')
        <!-- Sidebar -->
        @include('components.sidebar')
    
        <main class="p-4 md:ml-64 min-h-screen pt-20">
          @yield('content')
        </main>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
