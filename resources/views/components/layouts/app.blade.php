<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <title>{{ config('app.name', 'Gestion Ecole') }}</title>

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @livewire('header')
    @livewire('sidebar')

    <main>
        {{ $slot }}
    </main>
    @livewire('Footer')
    @livewireScripts

</body>
</html>
