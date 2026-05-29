<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Fortify</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}">Laravel Fortify</a>

        <div class="d-flex gap-2">
            <a href="{{ route('homepage') }}" class="btn btn-outline-light btn-sm">Home</a>

            @guest
                <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Registrati</a>
            @endguest

            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-success btn-sm">Dashboard</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>

<main class="container py-5">
    {{ $slot }}
</main>

</body>
</html>