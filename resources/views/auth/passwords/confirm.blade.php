@extends('auth.auth-main')

@section('title')
    Confirm Password
@endsection


@section('content')
    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
    <div class="card-body">
        <div class="small mb-3 text-muted">
            {{ __('Please confirm your password before continuing.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="form-floating mb-3">
                <input name="password" class="form-control @error('password') is-invalid @enderror" id="password"
                       type="password" placeholder="password" required autocomplete="current-password"/>
                <label for="password">{{ __('Password') }}</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>

            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <button class="btn btn-primary" type="submit">{{ __('Confirm Password') }}</button>
            </div>
        </form>
    </div>
    <div class="card-footer text-center py-3">
        <div class="small"><a href="{{route('register')}}">Need an account? Sign up!</a></div>
    </div>
@endsection
