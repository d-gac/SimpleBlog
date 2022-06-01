@extends('auth.auth-main')

@section('title')
    Login
@endsection

@section('content')
    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-floating mb-3">
                <input name="email" class="form-control @error('email') is-invalid @enderror" id="email" type="email"
                       placeholder="name@example.com" value="{{ old('email') }}" required autocomplete="email"
                       autofocus/>
                <label for="email">{{ __('Email Address') }}</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input name="password" class="form-control @error('password') is-invalid @enderror" id="password"
                       type="password" placeholder="password" value="{{ old('password') }}" required
                       autocomplete="current-password"/>
                <label for="password">{{ __('Password') }}</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>


            <div class="form-check mb-3">
                <input class="form-check-input" name="remember" id="remember"
                       type="checkbox" {{ old('remember') ? 'checked' : '' }} />
                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
            </div>

            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                @if (Route::has('password.request'))
                    <a class="small" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                @endif
                <button class="btn btn-primary" href="index.html">{{ __('Login') }}</button>
            </div>

        </form>
    </div>
    <div class="card-footer text-center py-3">
        <div class="small"><a href="{{route('register')}}">Need an account? Sign up!</a></div>
    </div>
@endsection
