<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page logo -->
    <link rel="icon" href="https://cdn.discordapp.com/attachments/1090199171568500760/1091310054222864464/logo_deliverboo_100x250.png" type="image/icon type">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css' integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==' crossorigin='anonymous' />

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>

    <div id="app">

        <div id="base-layout">
            <main>
                @include('includes.navbar')
                <div class="container pb-4">

                    {{-- INFO --}}
                    @include('includes.alerts.session')

                    {{-- ERROR  --}}
                    @auth
                    @include('includes.alerts.errors')
                    @endauth

                    @yield('content')
                </div>
            </main>


        </div>
    </div>
    @yield('scripts')
</body>

</html>