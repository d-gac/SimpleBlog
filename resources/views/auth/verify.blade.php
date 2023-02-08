@extends('auth.auth-main')

@section('title')
    Verify
@endsection


@section('content')
        <div class="card-header">Zweryfikuj swój adres email.</div>

    <div class="card-body">
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                Nowy link weryfikacyjny został wysłany na Twój adres e-mail.
            </div>
        @endif

            Zanim przejdziesz dalej, sprawdź, czy w wiadomości e-mail znajduje się link weryfikacyjny.
            Jeśli nie otrzymałeś wiadomości e-mail,
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit"
                    class="btn btn-link p-0 m-0 align-baseline">kliknij tutaj, aby wysłać następny</button>
            .
        </form>
    </div>
@endsection
