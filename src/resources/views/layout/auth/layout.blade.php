<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        {{-- Page Title --}}
        <title>{{ config('app.name') }} - @yield('page-title')</title>

        {{-- Meta Tags --}}
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="Cor Visser">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- Stylesheets --}}
        <link rel="stylesheet" href="{{ asset("css/app.css") }}" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">

    </head>

    <body>

        {{-- Yield App --}}
        @yield('app')

        {{-- Include Alerts --}}
        @include('layout.master.includes.alert')

        {{-- Scripts --}}
        <script src="https://code.jquery.com/jquery-3.6.0.js" crossorigin="anonymous"></script>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

        {{-- Yield Scripts --}}
        @yield('scripts')

    </body>

</html>
