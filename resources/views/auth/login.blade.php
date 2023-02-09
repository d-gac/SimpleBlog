@extends('auth.auth-main')

@section('title')

    Logowanie

@endsection

@section('content')

    <div class="card-header">

        <h3 class="text-center font-weight-light my-4">Logowanie</h3>

    </div>

    <div class="card-body">

        <form method="POST" action="{{ route('login') }}">

            @csrf

            <div class="form-floating mb-3">

                <input name="email" id="email" type="email" placeholder="nazwa@domena.pl"
                       value="{{ old('email') }}"
                       class="form-control @error('email') is-invalid @enderror"
                       required
                       autocomplete="email"
                       autofocus/>

                <label for="email">Email</label>

                @error('email')

                    <span class="invalid-feedback" role="alert">

                        <strong>{{ $message }}</strong>

                    </span>

                @enderror

            </div>

            <div class="form-floating mb-3">

                <input name="password" id="password" type="password" placeholder="Hasło"
                       value="{{ old('password') }}"
                       class="form-control @error('password') is-invalid @enderror"
                       required
                       autocomplete="password"/>

                <label for="password">Hasło</label>

                @error('password')

                    <span class="invalid-feedback" role="alert">

                        <strong>{{ $message }}</strong>

                    </span>

                @enderror

            </div>

            @include('auth.components.remember-me-button')

            @include('auth.components.login-confirm-button')

            @include('auth.components.forget-password-button')

        </form>

    </div>

    @include('auth.components.register-button')

@endsection
