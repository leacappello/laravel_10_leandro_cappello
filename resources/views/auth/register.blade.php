<h1>Registrazione</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/register">
    @csrf

    <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
    <br><br>

    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    <br><br>

    <input type="password" name="password" placeholder="Password">
    <br><br>

    <input type="password" name="password_confirmation" placeholder="Conferma password">
    <br><br>

    <button type="submit">Registrati</button>
</form>