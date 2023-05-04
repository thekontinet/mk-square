<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])


    </head>
    <body class="font-sans antialiased bg-gray-700 text-slate-300 dark:bg-gray-900">
        <x-darkmode-button />
        @stack('stylesheets')
        <div class="flex flex-col items-center min-h-screen pt-6 mx-auto lg:max-w-md sm:justify-center sm:pt-0 dark:bg-gray-900">
            <div class="pt-4">
                <a href="/">
                    <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
                </a>
            </div>

            <div class="w-full">
                {{ $slot }}
            </div>
        </div>


        @stack('scripts')
    </body>
</html>


