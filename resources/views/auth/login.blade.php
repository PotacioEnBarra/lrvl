@extends('layouts.app2')

@section('content')
    <div class="container-content">

        <div class="container-left">
            <div class="container-left-text">
                <div class="container-left-text-up">
                    <h1 class="h1-welcome">Bienvenido a la mejor plataforma</h1>
                    <h1 class="h1-welcome-bold">organizacional online </h1>
                </div>
                <div class="container-left-text-down">
                    <h2 class="h2-sub-wecome">Gestión efectiva del talento humano</h2>
                </div>
            </div>
        </div>
        <div class="container-right">
            <div class="container-login">
                <div class="container-img"></div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="container-login-text">
                        <div class="container-login-text-email">
                            <label for="email" class="container-login-text-email-label">Usuario</label>

                            <div class="input-spaces">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="container-login-text-password">
                            <label for="password" class="">Contraseña</label>

                            <div class="input-spaces">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="container-login-text-remember">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Recordar cuenta
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="container-btn-login">
                            <div class="">
                                <button type="submit" class="btn-login">
                                    Iniciar Sesión
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="container-text-user">
                            <div><a href="#" class="container-text-question">¿Olvidaste tu usuario?</a></div>
                            <div><a href="#" class="container-text-question">¿Olvidaste tu contraseña?</a></div>
                        </div>
                    </div>
                </form>

                <div class="container-login-account"></div>
                <div class="container-btn-login"></div>
                <div class="container-alert"></div>
            </div>
            {{-- <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>
@endsection
