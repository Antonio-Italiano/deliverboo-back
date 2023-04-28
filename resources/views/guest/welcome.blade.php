<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="home-guest">
        <div class="container">
            <header>
                @include('includes.navbar')
            </header>
            <main class="d-flex align-items-end justify-content-center">
                <!-- Main small -->
                <div class="d-block d-md-none">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center">
                        <h2 class="page-title-2">Diventa un partner DeliveBoo</h2>
                        <a class="nav-link btn-cust" href="{{ route('register') }}">{{ ('Crea Account') }}</a>
                    </div>
                </div>
                <!-- Main big -->
                <div class="d-none d-md-block">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center">
                        <h1 class="page-title-1">Diventa un partner DeliveBoo</h1>
                        <a class="nav-link btn-cust" href="{{ route('register') }}">{{ ('Crea Account') }}</a>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>