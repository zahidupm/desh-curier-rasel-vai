<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="p-4 flex border-b header-border-color items-center">
            <div class="min-w-max">
                <a href="{{route('home')}}" class="flex items-center">
                    <img class="mr-4" src="{{asset('assets/img/')}}/logo-icon.svg" alt="">
                    <h1 class="font-bold text-2xl logo-heading">{{ config('app.name') }}</h1>
                </a>
            </div>
            <div class="w-full flex justify-end dc-nav-links">
                <a href="">Contact</a>
                <a href="">Help</a>
                <a href="">Website</a>
                <a class="primary-color font-bold" href="">Login</a>
            </div>
        </div>
    </body>
</html>
