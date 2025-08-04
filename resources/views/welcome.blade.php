<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="text-center ">
            @auth
                <h1 class="display-4 mb-4">Bienvenue, {{ Auth::user()->name }} !</h1>
            @else
                <h1 class="display-4 mb-4">Welcome to the secure contact directory</h1>
            @endauth
            <p class="lead mb-5">
                Easily and securely manage your personal or professional contacts.</br>Protected access, a modern interface, and comprehensive data management.
            </p>
            @guest
                <a href="{{ route("login") }}" class="btn btn-primary btn-lg me-2">Login</a>
                <a href="{{ route("register") }}" class="btn btn-outline-primary btn-lg">Register</a>
            @else
                <a href="}" class="btn btn-success btn-lg mb-3">Accéder à mon annuaire</a>
                <br>
                <a href="" class="btn btn-primary btn-lg">
                    <i class="bi bi-plus-circle me-2"></i> Ajouter un contact
                </a>
            @endauth
    </body>
</html>
