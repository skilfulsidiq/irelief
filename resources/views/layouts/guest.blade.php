<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Irelief') }}</title>

          <meta name="theme-color" content="#ffffff" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Exo:wght@300;400;500;600;700;800;900&amp;family=Public+Sans:wght@100;200;300;400;500;600;700&amp;display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/irelief.css')}}" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body >

        <x-template.preloader/>
        <x-template.mobile_menu/>
        <x-template.header/>

        {{ $slot }}


        <x-template.footer/>




        <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/app.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    </body>
</html>
