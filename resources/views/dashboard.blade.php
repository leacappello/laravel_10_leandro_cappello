<x-layout>
    <div class="card shadow">
        <div class="card-body">

            <h1 class="mb-3">Dashboard protetta</h1>

            <p>
                Se visualizzi questa pagina, significa che sei autenticato correttamente.
            </p>

            <p>
                Utente loggato:
                <strong>{{ Auth::user()->name }}</strong>
            </p>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-danger">
                    Logout
                </button>
            </form>

        </div>
    </div>
</x-layout>