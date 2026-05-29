<x-layout>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">

            <div class="card shadow">
                <div class="card-body">

                    <h1 class="mb-4">Login</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="/login">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control" 
                                placeholder="Inserisci la tua email"
                                value="{{ old('email') }}"
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input 
                                type="password" 
                                name="password" 
                                class="form-control" 
                                placeholder="Inserisci la password"
                            >
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Accedi
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-layout>