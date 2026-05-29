<x-layout>
    <div class="text-center">
        <h1 class="mb-3">Homepage Laravel Fortify</h1>

        <p class="lead">
            Progetto Laravel con autenticazione tramite Fortify, login, registrazione, logout e rotta protetta.
        </p>

        @guest
            <a href="{{ route('register') }}" class="btn btn-primary">
                Registrati
            </a>

            <a href="{{ route('login') }}" class="btn btn-outline-primary">
                Accedi
            </a>
        @endguest

        @auth
            <a href="{{ route('dashboard') }}" class="btn btn-success">
                Vai alla dashboard
            </a>
        @endauth
    </div>
</x-layout>