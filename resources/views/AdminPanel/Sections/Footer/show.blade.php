@extends('AdminPanel.admin-main')

@section('title')
    Ustawienia
@endsection

@section('subtitle')
    Ustawienia / Stopka
@endsection

@section('dashboard')

    <div class="flex-form-visbility">
        <div class="form-check form-switch me-3 mb-3">
            <input disabled class="form-check-input" name="is_visible_twitter" type="checkbox" id="is_visible_twitter"
                   {{  (old('is_visible_linkedin', $footer->is_visible_linkedin) == 1 ? ' checked' : '') }} value="1">
            <label class="form-check-label" for="is_visible_twitter">Twitter</label>
        </div>
        <div class="form-floating mb-3 w-85">
            <input disabled name="twitter" type="text" class="form-control" id="twitter" value="{{ old('twitter', $footer->twitter) }}">
            <label for="twitter">Link - Twitter</label>
        </div>
    </div>

    <div class="flex-form-visbility">
        <div class="form-check form-switch me-3 mb-3">
            <input disabled class="form-check-input" name="is_visible_facebook" type="checkbox" id="is_visible_facebook"
                   {{  (old('is_visible_facebook', $footer->is_visible_facebook) == 1 ? ' checked' : '') }} value="1">
            <label class="form-check-label" for="is_visible_facebook">Facebook</label>
        </div>
        <div class="form-floating mb-3 w-85">
            <input disabled name="facebook" type="text" class="form-control" id="facebook" value="{{ old('facebook', $footer->facebook) }}">
            <label for="facebook">Link - Facebook</label>
        </div>
    </div>

    <div class="flex-form-visbility">
        <div class="form-check form-switch me-3 mb-3">
            <input disabled class="form-check-input" name="is_visible_github" type="checkbox" id="is_visible_github"
                   {{  (old('is_visible_github', $footer->is_visible_github) == 1 ? ' checked' : '') }} value="1">
            <label class="form-check-label" for="is_visible_github">Github</label>
        </div>
        <div class="form-floating mb-3 w-85">
            <input disabled name="github" type="text" class="form-control" id="github" value="{{ old('github', $footer->github) }}">
            <label for="github">Link - Github</label>
        </div>
    </div>

    <div class="flex-form-visbility">
        <div class="form-check form-switch me-3 mb-3">
            <input disabled class="form-check-input" name="is_visible_linkedin" type="checkbox" id="is_visible_linkedin"
                   {{  (old('is_visible_linkedin', $footer->is_visible_linkedin) == 1 ? ' checked' : '') }} value="1">
            <label class="form-check-label" for="is_visible_linkedin">Linkedin</label>
        </div>
        <div class="form-floating mb-3 w-85">
            <input disabled name="linkedin" type="text" class="form-control" id="linkedin" value="{{ old('linkedin', $footer->linkedin) }}">
            <label for="linkedin">Link - Linkedin</label>
        </div>
    </div>

    <div class="flex-form-visbility">
        <div class="form-check form-switch me-3 mb-3">
            <input disabled class="form-check-input" name="is_visible_youtube" type="checkbox" id="is_visible_youtube"
                   {{  (old('is_visible_youtube', $footer->is_visible_youtube) == 1 ? ' checked' : '') }} value="1">
            <label class="form-check-label" for="is_visible_youtube">Youtube</label>
        </div>
        <div class="form-floating mb-3 w-85">
            <input disabled name="youtube" type="text" class="form-control" id="youtube" value="{{ old('youtube', $footer->youtube) }}">
            <label for="youtube">Link - Youtube</label>
        </div>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <a class="btn btn-primary" href="{{route('footer.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
    </div>
@endsection
