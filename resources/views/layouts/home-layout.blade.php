<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JobSphere | @yield('title')</title>

    <link rel="icon" href="{{asset('logo.svg')}}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen flex flex-col">
    {{-- Componente header --}}
    @unless (Route::is('login') || Route::is('register'))
        <x-layouts.header />
    @endunless

    {{-- Contenido --}}
    <main class="flex-1 flex items-center justify-center">
        @yield('content')
    </main>

    {{-- Componente footer --}}
    <x-layouts.footer />
    @livewireScripts
</body>

</html>
