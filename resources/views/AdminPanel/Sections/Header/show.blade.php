@extends('AdminPanel.admin-main')

@section('title')
    Ustawienia
@endsection

@section('subtitle')
    Ustawienia / Nagłówek
@endsection

@section('dashboard')

    <div class="flex-form-visbility">
        <div class="form-check form-switch me-3 mb-3">
            <input disabled class="form-check-input" name="is_visible_webTitle" type="checkbox" id="is_visible_webTitle"
                   {{  (old('is_visible_webTitle', $header->is_visible_webTitle) == 1 ? ' checked' : '') }} value="1">
            <label class="form-check-label" for="is_visible_webTitle">Tytuł witryny</label>
        </div>
        <div class="form-floating mb-3 w-85">
            <input disabled name="webTitle" type="text" class="form-control" id="youtube" value="{{ old('webTitle', $header->webTitle) }}">
            <label for="webTitle">Tytuł witryny</label>
        </div>
    </div>

    <div class="form-floating mb-3">
        <input disabled name="banner_title" type="text" class="form-control" id="is_visible_facebook" value="{{ old('banner_title', $header->banner_title) }}">
        <label for="banner_title">Baner - Tytuł</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="banner_paragraph" type="text" class="form-control" id="facebook" value="{{ old('banner_paragraph', $header->banner_paragraph) }}">
        <label for="banner_paragraph">Baner - Treść</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="banner_photo" type="file" class="form-control" id="is_visible_github" style="padding-top: 2.125rem;">
        <p class="my-3">Aktualne tło: /{{ old('banner_photo', $header->banner_photo) ?? 'Brak tła'}}</p>
        <label for="banner_photo">Baner - Tło</label>
    </div>
    <div class="form-check form-switch me-3 mb-3">
        <input disabled class="form-check-input" name="is_visible_about" type="checkbox" id="is_visible_about"
               {{  (old('is_visible_about', $header->is_visible_about) == 1 ? ' checked' : '') }} value="1">
        <label class="form-check-label" for="is_visible_about">Widoczność - "O nas"</label>
    </div>
    <div class="form-check form-switch me-3 mb-3">
        <input disabled class="form-check-input" name="is_visible_contact" type="checkbox" id="is_visible_contact"
               {{  (old('is_visible_contact', $header->is_visible_contact) == 1 ? ' checked' : '') }} value="1">
        <label class="form-check-label" for="is_visible_contact">Widoczność - "Kontakt"</label>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <a class="btn btn-primary" href="{{route('header.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
    </div>
@endsection
