@extends('AdminPanel.admin-main')

@section('title')
    Edytuj stopkę
@endsection

@section('subtitle')
    Ustawienia / Stopka / Edycja
@endsection

@section('dashboard')
    <form action="{{route('footer.update', $footer->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif

        <div class="flex-form-visbility">
            <div class="form-check form-switch me-3 mb-3">
                <input class="form-check-input" name="is_visible_twitter" type="checkbox" id="is_visible_twitter"
                       {{  (old('is_visible_twitter', $footer->is_visible_twitter) == 1 ? ' checked' : '') }} value="1">
                <label class="form-check-label" for="is_visible_twitter">Twitter</label>
            </div>
            <div class="form-floating mb-3 w-85">
                <input name="twitter" type="text" class="form-control" id="twitter" value="{{ old('twitter', $footer->twitter) }}">
                <label for="twitter">Link - Twitter</label>
            </div>
        </div>

        <div class="flex-form-visbility">
            <div class="form-check form-switch me-3 mb-3">
                <input class="form-check-input" name="is_visible_facebook" type="checkbox" id="is_visible_facebook"
                       {{  (old('is_visible_facebook', $footer->is_visible_facebook) == 1 ? ' checked' : '') }} value="1">
                <label class="form-check-label" for="is_visible_facebook">Facebook</label>
            </div>
            <div class="form-floating mb-3 w-85">
                <input name="facebook" type="text" class="form-control" id="facebook" value="{{ old('facebook', $footer->facebook) }}">
                <label for="facebook">Link - Facebook</label>
            </div>
        </div>

        <div class="flex-form-visbility">
            <div class="form-check form-switch me-3 mb-3">
                <input class="form-check-input" name="is_visible_github" type="checkbox" id="is_visible_github"
                       {{  (old('is_visible_github', $footer->is_visible_github) == 1 ? ' checked' : '') }} value="1">
                <label class="form-check-label" for="is_visible_github">Github</label>
            </div>
            <div class="form-floating mb-3 w-85">
                <input name="github" type="text" class="form-control" id="github" value="{{ old('github', $footer->github) }}">
                <label for="github">Link - Github</label>
            </div>
        </div>

        <div class="flex-form-visbility">
            <div class="form-check form-switch me-3 mb-3">
                <input class="form-check-input" name="is_visible_linkedin" type="checkbox" id="is_visible_linkedin"
                       {{  (old('is_visible_linkedin', $footer->is_visible_linkedin) == 1 ? ' checked' : '') }} value="1">
                <label class="form-check-label" for="is_visible_linkedin">Linkedin</label>
            </div>
            <div class="form-floating mb-3 w-85">
                <input name="linkedin" type="text" class="form-control" id="linkedin" value="{{ old('linkedin', $footer->linkedin) }}">
                <label for="linkedin">Link - Linkedin</label>
            </div>
        </div>

        <div class="flex-form-visbility">
            <div class="form-check form-switch me-3 mb-3">
                <input class="form-check-input" name="is_visible_youtube" type="checkbox" id="is_visible_youtube"
                       {{  (old('is_visible_youtube', $footer->is_visible_youtube) == 1 ? ' checked' : '') }} value="1">
                <label class="form-check-label" for="is_visible_youtube">Youtube</label>
            </div>
            <div class="form-floating mb-3 w-85">
                <input name="youtube" type="text" class="form-control" id="youtube" value="{{ old('youtube', $footer->youtube) }}">
                <label for="youtube">Link - Youtube</label>
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a class="btn btn-primary" href="{{route('footer.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
            <button class="btn btn-primary" type="submit">Zapisz <i class='fa-solid fa-angles-right'></i></button>
        </div>
    </form>
@endsection
