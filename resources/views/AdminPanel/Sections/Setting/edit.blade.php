@extends('AdminPanel.admin-main')

@section('meta-title')
    Ustawienia - Nagłówek - Edycja
@endsection


@section('title')
    Ustawienia
@endsection

@section('subtitle')
    Ustawienia / Nagłówek / Edycja
@endsection

@section('dashboard')
    <form action="{{route('setting.update', $setting->id)}}" method="POST">
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
            <input name="about_title" type="text" class="form-control" id="about_title" value="{{ old('about_title', $setting->about_title) }}">
            <label for="about_title">O nas - Tytuł</label>
        </div>
        <div class="form-floating mb-3">
            <textarea name="about_content" type="text" class="form-control ta-short" id="about_content" placeholder="Treść o nas...">{{ old('about_content', $setting->about_content) }}</textarea>
            <label for="about_content">O nas - Treść</label>
        </div>
        <div class="form-floating mb-3">
            <input name="contact_title" type="text" class="form-control" id="contact_title" value="{{ old('contact_title', $setting->contact_title) }}">
            <label for="contact_title">Kontakt - Tytuł</label>
        </div>
        <div class="form-floating mb-3">
            <textarea name="contact_content" type="text" class="form-control ta-short" id="contact_content" placeholder="Treść kontaktu...">{{ old('contact_content', $setting->contact_content) }}</textarea>
            <label for="contact_content">Kontakt - Treść</label>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a class="btn btn-primary" href="{{route('setting.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
            <button class="btn btn-primary" type="submit">Zapisz <i class='fa-solid fa-angles-right'></i></button>
        </div>
    </form>
@endsection
