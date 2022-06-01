@extends('auth.auth-main')

@section('title')
    Reset password
@endsection


@section('content')
    <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
    <div class="card-body">
        <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your
            password.
        </div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email"
                       placeholder="name@example.com" value="{{ old('email') }}" required autocomplete="email"
                       autofocus/>
                <label for="email">{{ __('Email Address') }}</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                @enderror
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                <a class="small" href="{{route('login')}}">Return to login</a>
                <button type="submit" class="btn btn-primary">{{ __('Send Password Reset Link') }}</button>
            </div>

        </form>
    </div>
    <div class="card-footer text-center py-3">
        <div class="small"><a href="{{route('register')}}">Need an account? Sign up!</a></div>
    </div>
@endsection
