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


    <div class="login-page-bg flex">
        <div class="flex-1">
            <img src="{{asset('assets/img')}}/login-icon.png" alt="">
        </div>

        <div class="flex-1">
            <div class="dc-login-box p-10 shadow mt-10">
                <h3 class="mb-2">Welcome back</h3>
                <p>Log in your account & Manage your system</p>
                <form action="" class="mt-6">
                    <div class="border-b dc-header-border-color flex items-center mb-4">
                        <div class="min-w-ma mr-3">
                            <img src="{{'assets/img/Iconly/Light'}}/profile.svg" alt="">
                        </div>
                        <input type="email" placeholder="Email" name="" id="" class="w-full p-3 border-none focus:outline-none focus:border-none">
                    </div>
                    <div class="border-b dc-header-border-color flex items-center">
                        <div class="min-w-ma mr-3">
                            <img src="{{'assets/img/Iconly/Light'}}/lock.svg" alt="">
                        </div>
                        <input type="password" placeholder="Password" name="" id="" class="w-full p-3 border-none focus:outline-none focus:border-none">
                    </div>

                    <button type="submit" class="dc-btn mt-6">Log In</button>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>
