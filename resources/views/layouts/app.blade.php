<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="manifest" href="{{ asset('manifest.json') }}">
        <meta name="msapplication-config" content="{{ asset('tiles.xml') }}" />

        <link rel="icon" type="image/png" sizes="192x192" href="/img/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">

        {{-- COnfig Safari browser --}}
        <link rel="apple-touch-icon" sizes="120x120" href="/img/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="167x167" href="/img/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-icon-180x180.png">

        {{-- Hide Safari User Interface Components & Change status bar color --}}
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="#0190CC">
        
        <title>Vegapharm — {{ __('Путеводная звезда здоровья') }}</title>

        {{-- Google Open Sans Font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">

        {{-- Material Icons --}}
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">

        {{-- Owl Carousel --}}
        <link rel="stylesheet" href="{{ asset('js/plugins/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('js/plugins/owl-carousel/owl.theme.default.min.css') }}">

        {{-- Selectize --}}
        <link href="{{ asset('js/plugins/selectize/selectize.css') }}" rel="stylesheet">

        {{-- App styles --}}
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/form.css') }}">
        <link rel="stylesheet" href="{{ asset('css/lists.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cards.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pages.css') }}">
        <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    </head>

    <body>
        {{-- SVG Sprite --}}
        <x-svg-sprite />

        @include('layouts.header')
        <main class="main" role="main">
            @yield('main')
        </main>
        @include('layouts.footer')

        {{-- JQuery --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        {{-- Owl Carousel --}}
        <script src="{{ asset('js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>

        {{-- Selectize --}}
        <script src="{{ asset('js/plugins/selectize/selectize.min.js') }}"></script>

        {{-- App scripts --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
