<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>

</head>

<body>
    <div id="app">
        <header-component></header-component>
        <router-view></router-view>
    </div>
</body>

</html>
