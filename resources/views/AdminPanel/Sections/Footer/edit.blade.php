@extends('AdminPanel.admin-main')

@section('title')
    Ustawienia
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
        <div class="form-floating mb-3">
            <input name="is_visible_twitter" type="text" class="form-control" id="is_visible_twitter" value="{{ $footer->is_visible_twitter }}">
            <label for="is_visible_twitter">Widoczność - Twitter</label>
        </div>
        <div class="form-floating mb-3">
            <input name="twitter" type="text" class="form-control" id="twitter" value="{{ $footer->twitter }}">
            <label for="twitter">Link - Twitter</label>
        </div>
        <div class="form-floating mb-3">
            <input name="is_visible_facebook" type="text" class="form-control" id="is_visible_facebook" value="{{ $footer->is_visible_facebook }}">
            <label for="is_visible_facebook">Widoczność - Facebook</label>
        </div>
        <div class="form-floating mb-3">
            <input name="facebook" type="text" class="form-control" id="facebook" value="{{ $footer->facebook }}">
            <label for="facebook">Link - Facebook</label>
        </div>
        <div class="form-floating mb-3">
            <input name="is_visible_github" type="text" class="form-control" id="is_visible_github" value="{{ $footer->is_visible_github }}">
            <label for="is_visible_github">Widoczność - Github</label>
        </div>
        <div class="form-floating mb-3">
            <input name="github" type="text" class="form-control" id="github" value="{{ $footer->github }}">
            <label for="github">Link - Github</label>
        </div>
        <div class="form-floating mb-3">
            <input name="is_visible_linkedin" type="text" class="form-control" id="is_visible_linkedin" value="{{ $footer->is_visible_linkedin }}">
            <label for="is_visible_linkedin">Widoczność - Linkedin</label>
        </div>
        <div class="form-floating mb-3">
            <input name="linkedin" type="text" class="form-control" id="linkedin" value="{{ $footer->linkedin }}">
            <label for="linkedin">Link - Linkedin</label>
        </div>
        <div class="form-floating mb-3">
            <input name="is_visible_youtube" type="text" class="form-control" id="is_visible_youtube" value="{{ $footer->is_visible_youtube }}">
            <label for="is_visible_youtube">Widoczność - Youtube</label>
        </div>
        <div class="form-floating mb-3">
            <input name="youtube" type="text" class="form-control" id="youtube" value="{{ $footer->youtube }}">
            <label for="youtube">Link - Youtube</label>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="{{route('footer.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
            <button class="btn btn-primary" type="submit">Zapisz <i class='fa-solid fa-angles-right'></i></button>
        </div>
    </form>
@endsection
