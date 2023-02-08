@extends('auth.auth-main')

@section('title')
    Reset password
@endsection


@section('content')
    <div class="card-header"><h3 class="text-center font-weight-light my-4">Przywróć hasło</h3></div>
    <div class="card-body">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-floating mb-3">
                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email"
                       placeholder="name@example.com" value="{{ old('email') }}" required autocomplete="email"
                       autofocus/>
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
                        <input class="form-control @error('password') is-invalid @enderror" name="password"
                               id="password" type="password" placeholder="nazwa@domena.pl" required
                               autocomplete="new-password"/>
                        <label for="password">Hasło</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="password-confirm" name="password_confirmation" type="password"
                               placeholder="Potwierdź hasło" required autocomplete="new-password"/>
                        <label for="password-confirm">Potwierdź hasło</label>
                    </div>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Resetuj hasło
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer text-center py-3">
        <div class="small"><a href="{{route('register')}}">Nie masz konta? Zarejestruj się teraz!</a></div>
    </div>
@endsection
