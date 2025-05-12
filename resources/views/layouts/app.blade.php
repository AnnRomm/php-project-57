<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ __('layout.app_name') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Scripts -->
        <link rel="preload" as="style" href="https://php-task-manager-ru.hexlet.app/build/assets/app.4885a691.css" /><link rel="modulepreload" href="https://php-task-manager-ru.hexlet.app/build/assets/app.42df0f0d.js" /><link rel="stylesheet" href="https://php-task-manager-ru.hexlet.app/build/assets/app.4885a691.css" /><script type="module" src="https://php-task-manager-ru.hexlet.app/build/assets/app.42df0f0d.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div id="app">
            <header class="fixed w-full">
                @include('layouts.header')
            </header>

         <section class="bg-white dark:bg-gray-900">
                @yield('content')
         </section>
        </div>
    </body>
</html>
