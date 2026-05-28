<h1>Dashboard protetta</h1>

<p>Se vedi questa pagina, sei autenticato.</p>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>