<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-outer-space-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JUUL DANMARK</title>

    <meta name="description" content="JUUL DANMARK">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=roboto:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --navbar-height: calc(100% + 130px);
        }
    </style>
</head>
<body class="bg-gray-100 antialiased">

<x-header />

<div class="relative bg-gray-100">
    <div class="relative max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 lg:py-12">
        <ul class="mx-auto text-center grid gap-x-2 gap-y-5 sm:gap-12 grid-cols-1 sm:grid-cols-3 sm:space-y-0 lg:grid-cols-5 lg:max-w-7xl">
            <li class="flex flex-col items-center">
                <a
                    href="{{ url('lastbil') }}"
                    class="flex flex-col items-center h-full group"
                    tabindex="-1"
                >
                    <picture class="flex justify-center rounded-full bg-gradient-to-b from-white group-hover:shadow group-hover:bg-white group-hover:active:shadow-lg motion-reduce:transition-colors active:transition-shadow duration-100 ease-in-out">
                        <source srcset="../gfx/lastbil.webp" type="image/webp">
                        <img class="w-auto max-h-[168px] sm:max-h-none sm:w-[168px] object-contain" alt="Lastbil" loading="lazy" width="100%" height="100%" src="../gfx/lastbil.png">
                    </picture>
                    <div class="flex-grow mt-2">
                        <h2 class="leading-6 font-bold text-gray-900 uppercase sm:text-lg sm:mb-2">Lastbil</h2>
                        <p class="text-gray-700 group-hover:text-black">Kørekort</p>
                    </div>
                    <button type="button" class="mt-2 sm:mt-3 py-0.5 px-10 rounded-md text-sm text-white bg-lime-500 focus:outline-none focus:ring focus:ring-lime-500/50 group-focus:outline-none group-focus:ring group-focus:ring-3 group-focus:ring-lime-500/50 group-hover:shadow group-hover:bg-lime-700 motion-reduce:transition-colors duration-100 ease-in-out">
                        Læs mere
                    </button>
                </a>
            </li>
        </ul>
    </div>
</div>

<x-footer />

</body>
</html>
