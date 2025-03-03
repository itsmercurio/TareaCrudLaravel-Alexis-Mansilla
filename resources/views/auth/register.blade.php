<x-guest-layout>
    <div class="text-center mb-4">
        <h2 class="display-6 fw-bold">
            {{ __('Crear Cuenta') }}
        </h2>
        <p class="text-muted">
            {{ __('¿Ya tienes cuenta?') }}
            <a href="{{ url('/login') }}" class="text-decoration-none">
                {{ __('Inicia Sesión') }}
            </a>
        </p>
    </div>

    <form method="POST" action="{{ url('/register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                name="password" required>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            <input id="password_confirmation" type="password" class="form-control" 
                name="password_confirmation" required>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary px-4">
                {{ __('Registrarse') }}
            </button>
        </div>
    </form>
</x-guest-layout>
