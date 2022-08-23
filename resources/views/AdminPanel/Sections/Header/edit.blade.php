@extends('AdminPanel.admin-main')

@section('title')
    Ustawienia
@endsection

@section('subtitle')
    Ustawienia / Nagłówek / Edycja
@endsection

@section('dashboard')
    <form action="{{route('header.update', $header->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
        <div class="form-floating mb-3">
            <input name="is_visible_webTitle" type="text" class="form-control" id="is_visible_twitter" value="{{ $header->is_visible_webTitle }}">
            <label for="is_visible_webTitle">Widoczność - Tytuł witryny</label>
        </div>
        <div class="form-floating mb-3">
            <input name="webTitle" type="text" class="form-control" id="twitter" value="{{ $header->webTitle }}">
            <label for="webTitle">Tytuł witryny</label>
        </div>
        <div class="form-floating mb-3">
            <input name="banner_title" type="text" class="form-control" id="is_visible_facebook" value="{{ $header->banner_title }}">
            <label for="banner_title">Baner - Tytuł</label>
        </div>
        <div class="form-floating mb-3">
            <input name="banner_paragraph" type="text" class="form-control" id="facebook" value="{{ $header->banner_paragraph }}">
            <label for="banner_paragraph">Baner - Treść</label>
        </div>
        <div class="form-floating mb-3">
            <input name="banner_photo" type="file" class="form-control" id="is_visible_github"> {{ $header->banner_photo ?? 'Brak tła'}}
            <label for="banner_photo">Baner - Tło</label>
        </div>
        <div class="form-floating mb-3">
            <input name="is_visible_about" type="text" class="form-control" id="is_visible_linkedin" value="{{ $header->is_visible_about }}">
            <label for="is_visible_about">Widoczność - "O nas"</label>
        </div>
        <div class="form-floating mb-3">
            <input name="is_visible_contact" type="text" class="form-control" id="is_visible_youtube" value="{{ $header->is_visible_contact }}">
            <label for="is_visible_contact">Widoczność - "Kontakt"</label>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a class="btn btn-primary" href="{{route('header.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
            <button class="btn btn-primary" type="submit">Zapisz <i class='fa-solid fa-angles-right'></i></button>
        </div>
    </form>
@endsection
