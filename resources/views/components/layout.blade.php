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

{{ $slot }}

<x-footer />

</body>
</html>
