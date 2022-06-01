@extends('auth.auth-main')

@section('title')
    Register
@endsection


@section('content')
    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-floating mb-3">
                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text"
                       placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                <label for="name">{{ __('Name') }}</label>
                @error('name')
                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input class="form-control @error('name') is-invalid @enderror" name="email" id="email" type="email"
                       placeholder="Email" value="{{ old('email') }}" required autocomplete="email"/>
                <label for="email">{{ __('Email Address') }}</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                @enderror
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control @error('password') is-invalid @enderror" id="name" id="password"
                               type="password" placeholder="Create a password" name="password" required
                               autocomplete="new-password"/>
                        <label for="password">{{ __('Password') }}</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="password-confirm" name="password-confirm" type="password"
                               placeholder="Confirm password" required autocomplete="new-password"/>
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    </div>
                </div>
            </div>

            <div class="mt-4 mb-0">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer text-center py-3">
        <div class="small"><a href="{{route('login')}}">Have an account? Go to login</a></div>
    </div>
@endsection
