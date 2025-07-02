<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col relative min-h-full bg-gray-200 dark:bg-gray-400 justify-center m-4">
<header class="flex justify-between items-center min-h-full bg-cyan-950 dark:bg-gray-900 rounded-lg p-4 pb-5">
    <div class="flex items-center justify-center gap-4">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="h-[50px] w-full object-contain rounded-lg">
        <a href="/" class="text-2xl dark:text-gray-300 text-white">Bidly</a>
    </div>
    <div class="flex gap-4">
        <button
            class="toggle flex h-fit items-center cursor-pointer gap-2 p-2 rounded-lg text-white bg-cyan-800 dark:bg-gray-500 dark:text-white shadow hover:shadow-amber-300 hover:text-amber-300 transition-all duration-300 ease-in dark:hover:shadow-blue-300 dark:hover:text-blue-300">
            <i class="bi bi-lightbulb-fill flex dark:hidden"></i>
            <i class="bi bi-lightbulb-off hidden dark:flex"></i>
        </button>
        <button
            class="toggle flex h-fit items-center cursor-pointer gap-2 p-2 rounded-lg text-white bg-cyan-800 dark:bg-gray-500 dark:text-white shadow hover:shadow-amber-300 hover:text-amber-300 transition-all duration-300 ease-in dark:hover:shadow-blue-300 dark:hover:text-blue-300">
            <i class="bi bi-power flex"></i>
        </button>

        <!-- Botão do menu (visível só em telas pequenas) -->
        <button id="menu-toggle"
                class="lg:hidden flex h-fit items-center cursor-pointer gap-2 p-2 rounded-lg text-white bg-cyan-800 dark:bg-gray-500 dark:text-white shadow hover:shadow-amber-300 hover:text-amber-300 transition-all duration-300 ease-in dark:hover:shadow-blue-300 dark:hover:text-blue-300">
            <i class="bi bi-list flex"></i>
        </button>
    </div>
</header>
<main class="min-h-full mt-4 rounded-lg flex flex-col lg:flex-row gap-4">
    <!-- Menu de navegação -->
    @include('components.sidebar')
    <aside class="dark:bg-gray-200 bg-gray-300 w-full rounded-lg p-4 h-full">
        @yield('content')
    </aside>
</main>
</body>
</html>
