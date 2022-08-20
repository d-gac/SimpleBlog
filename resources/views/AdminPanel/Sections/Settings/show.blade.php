@extends('AdminPanel.admin-main')

@section('title')
    Ustawienia
@endsection

@section('subtitle')
    Ustawienia
@endsection

@section('dashboard')
    <div class="form-floating mb-3">
        <input disabled name="is_visible_twitter" type="text" class="form-control" id="is_visible_twitter" value="{{ $setting->is_visible_twitter }}">
        <label for="is_visible_twitter">Widoczność - Twitter</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="twitter" type="text" class="form-control" id="twitter" value="{{ $setting->twitter }}">
        <label for="twitter">Link - Twitter</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="is_visible_facebook" type="text" class="form-control" id="is_visible_facebook" value="{{ $setting->is_visible_facebook }}">
        <label for="is_visible_facebook">Widoczność - Facebook</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="facebook" type="text" class="form-control" id="facebook" value="{{ $setting->facebook }}">
        <label for="facebook">Link - Facebook</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="is_visible_github" type="text" class="form-control" id="is_visible_github" value="{{ $setting->is_visible_github }}">
        <label for="is_visible_github">Widoczność - Github</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="github" type="text" class="form-control" id="github" value="{{ $setting->github }}">
        <label for="github">Link - Github</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="is_visible_linkedin" type="text" class="form-control" id="is_visible_linkedin" value="{{ $setting->is_visible_linkedin }}">
        <label for="is_visible_linkedin">Widoczność - Linkedin</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="linkedin" type="text" class="form-control" id="linkedin" value="{{ $setting->linkedin }}">
        <label for="linkedin">Link - Linkedin</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="is_visible_youtube" type="text" class="form-control" id="is_visible_youtube" value="{{ $setting->is_visible_youtube }}">
        <label for="is_visible_youtube">Widoczność - Youtube</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="youtube" type="text" class="form-control" id="youtube" value="{{ $setting->youtube }}">
        <label for="youtube">Link - Youtube</label>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary" href="{{route('setting.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
    </div>
@endsection
