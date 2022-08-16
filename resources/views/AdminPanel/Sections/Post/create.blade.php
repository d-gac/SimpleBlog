@extends('AdminPanel.admin-main')

@section('title')
    Wpisy
@endsection

@section('subtitle')
    Wpisy / Dodaj
@endsection

@section('dashboard')
    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
        <div class="form-floating mb-3">
            <input required name="title" type="text" class="form-control" id="title" value="{{old('title')}}" placeholder="Tytuł wpisu...">
            <label for="title">Tytuł</label>
        </div>
        <div class="form-floating mb-3">
            <textarea required name="preview_content" type="text" class="form-control ta-short" id="preview_content" placeholder="Treść poglądowa...">{{old('preview_content')}}</textarea>
            <label for="preview_content">Podgląd treści</label>
        </div>
        <div class="form-floating mb-3">
            <textarea required name="content" type="text" class="form-control ta-long" id="content" placeholder="Treść...">{{old('content')}}</textarea>
            <label for="content">Treść</label>
        </div>
        <div class="form-floating mb-3">
            <input required name="publication_date" type="datetime-local" class="form-control" value="{{old('publication_date')}}" id="publication_date" placeholder="Data publikacji...">
            <label for="publication_date">Data publikacji</label>
        </div>
        <div class="form-check form-switch mb-3 d-flex align-items-center">
            <input name="active" class="form-check-input checkbox" type="checkbox" id="active" value="1">
            <label class="form-check-label" for="active">Aktywny</label>
        </div>
        <label for="image">Miniaturka</label>
        <div class="form-floating mb-3">
            <input type="file" name="image" placeholder="Wybierz obrazek" value="{{old('image')}}" id="image">
        </div>
        <div class="mb-3">
            <label>Kategorie :</label><br/>
            <select required class="form-control" name="categories[]" value="{{old('categories[]')}}" multiple>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-floating mb-3">
            <input name="tags" type="text" class="form-control" id="tags" value="{{old('tags')}}" placeholder="Tagi wpisu...">
            <label for="title">Tagi</label>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="{{route('post.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
            <button class="btn btn-primary" type="submit">Zapisz <i class='fa-solid fa-angles-right'></i></button>
        </div>
    </form>
@endsection
