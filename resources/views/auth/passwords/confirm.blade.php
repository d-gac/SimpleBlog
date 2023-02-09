@extends('auth.auth-main')

@section('title')

    Potwierdź hasło

@endsection


@section('content')

    <div class="card-header">

        <h3 class="text-center font-weight-light my-4">Login</h3>

    </div>

    <div class="card-body">

        <div class="small mb-3 text-muted">

            Proszę potwierdź swoje hasło zanim przejdziezz dalej.

        </div>

        <form method="POST" action="{{ route('password.confirm') }}">

            @csrf

            <div class="form-floating mb-3">

                <input name="password"  id="password" type="password" placeholder="Hasło"
                       class="form-control @error('password') is-invalid @enderror"
                       required
                       autocomplete="current-password"/>

                <label for="password">Hasło</label>

                @error('password')

                <span class="invalid-feedback" role="alert">

                    <strong>{{ $message }}</strong>

                </span>

                @enderror

            </div>

            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                @include('auth.components.forget-password-button')

                <button class="btn btn-primary" type="submit">Potwierdź hasło</button>

            </div>

        </form>

    </div>

    <div class="card-footer text-center py-3">

        @include('auth.components.register-button')

    </div>

@endsection
