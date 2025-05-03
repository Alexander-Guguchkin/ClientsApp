<div class="container">
    <div class="login-container">
        <div class="logo">
            <h2>Вход в CRM</h2>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/login">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                    required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Запомнить меня</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Войти</button>

            @if (Route::has('password.request'))
                <div class="text-center mt-3">
                    <a href="{{ route('password.request') }}">Забыли пароль?</a>
                </div>
            @endif
        </form>
    </div>
</div>
