@extends('AdminPanel.admin-main')

@section('title')
    Ustawienia
@endsection

@section('subtitle')
    Ustawienia / Nagłówek
@endsection

@section('dashboard')
    <div class="form-floating mb-3">
        <input disabled name="is_visible_twitter" type="text" class="form-control" id="is_visible_twitter" value="{{ $header->is_visible_webTitle }}">
        <label for="is_visible_twitter">Widoczność - Tytuł witryny</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="twitter" type="text" class="form-control" id="twitter" value="{{ $header->webTitle }}">
        <label for="twitter">Tytuł witryny</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="is_visible_facebook" type="text" class="form-control" id="is_visible_facebook" value="{{ $header->banner_title }}">
        <label for="is_visible_facebook">Baner - Tytuł</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="facebook" type="text" class="form-control" id="facebook" value="{{ $header->banner_paragraph }}">
        <label for="facebook">Baner - Treść</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="is_visible_github" type="text" class="form-control" id="is_visible_github" value="{{ $header->banner_photo }}">
        <label for="is_visible_github">Baner - Tło</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="is_visible_linkedin" type="text" class="form-control" id="is_visible_linkedin" value="{{ $header->is_visible_about }}">
        <label for="is_visible_linkedin">Widoczność - "O nas"</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="is_visible_youtube" type="text" class="form-control" id="is_visible_youtube" value="{{ $header->is_visible_contact }}">
        <label for="is_visible_youtube">Widoczność - "Kontakt"</label>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <a class="btn btn-primary" href="{{route('header.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
    </div>
@endsection
