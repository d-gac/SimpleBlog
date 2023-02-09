@extends('auth.auth-main')

@section('title')

    Rejestracja

@endsection


@section('content')

    <div class="card-header">

        <h3 class="text-center font-weight-light my-4">Utwórz konto</h3>

    </div>

    <div class="card-body">

        <form method="POST" action="{{ route('register') }}">

            @csrf

            <div class="form-floating mb-3">

                <input class="form-control @error('name') is-invalid @enderror"
                       id="name" name="name" type="text" placeholder="Nazwa"
                       value="{{ old('name') }}"
                       required
                       autocomplete="name"
                       autofocus/>

                <label for="name">Nazwa</label>

                @error('name')

                    <span class="invalid-feedback" role="alert">

                        <strong>{{ $message }}</strong>

                    </span>

                @enderror

            </div>

            <div class="form-floating mb-3">

                <input class="form-control @error('email') is-invalid @enderror"
                       name="email" id="email" type="email" placeholder="Email"
                       value="{{ old('email') }}"
                       required
                       autocomplete="email"/>

                <label for="email">Email</label>

                @error('email')

                    <span class="invalid-feedback" role="alert">

                        <strong>{{ $message }}</strong>

                    </span>

                @enderror

            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">

                        <input class="form-control @error('password') is-invalid @enderror"
                               id="password" type="password" placeholder="Utwórz hasło" name="password"
                               required
                               autocomplete="new-password"/>

                        <label for="password">Hasło</label>

                        @error('password')

                            <span class="invalid-feedback" role="alert">

                                <strong>{{ $message }}</strong>

                            </span>

                        @enderror

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-floating mb-3 mb-md-0">

                        <input class="form-control" id="password_confirmation" name="password_confirmation" type="password"
                               placeholder="Potwierdź hasło" required autocomplete="new-password"/>

                        <label for="password_confirmation">Potwierdź hasło</label>

                    </div>

                </div>

            </div>

            @include('auth.components.register-confirm-button')

        </form>

    </div>

    @include('auth.components.login-button')

@endsection
