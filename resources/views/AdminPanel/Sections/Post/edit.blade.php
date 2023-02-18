@extends('AdminPanel.admin-main')

@section('title')
    Edytuj wpis
@endsection

@section('subtitle')
    Wpisy / Edycja / {{$post->title}}
@endsection

@section('dashboard')
    <form action="{{route('post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
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
            <input required name="title" type="text" class="form-control" id="title" value="{{ old('title', $post->title) }}" placeholder="Tytuł wpisu...">
            <label for="title">Tytuł</label>
        </div>
        <div class="form-floating mb-3">
            <textarea required name="preview_content" type="text" class="form-control" id="preview_content ta-short" placeholder="Treść poglądowa...">{{ old('preview_content', $post->preview_content) }}</textarea>
            <label for="preview_content">Podgląd treści</label>
        </div>
        <div class="mb-3">
            <label for="content" class="ckeditorLabel">Treść</label>
            <textarea required name="content" type="text" class="ckeditor form-control ta-long" id="content" placeholder="Treść poglądowa...">{{ old('content', $post->content) }}</textarea>
        </div>
        <div class="form-floating mb-3">
            <input required name="publication_date" type="datetime-local" class="form-control" id="publication_date" value="{{ \Carbon\Carbon::parse(old('publication_date', $post->publication_date))->format('Y-m-d\TH:i:s') }}" placeholder="Data publikacji...">
            <label for="publication_date">Data publikacji</label>
        </div>
        <div class="form-check form-switch mb-3 d-flex align-items-center">
            <input type="hidden" name="active" value="0">
            <input name="active" @if(old('active', $post->active) == 1) checked @endif class="form-check-input checkbox" type="checkbox" id="active" value="1">
            <label class="form-check-label" for="active">Aktywny</label>
        </div>
        <label for="image">Miniaturka</label>
        <div class="form-floating mb-3">
            @if(old('photo', $post->photo))
                <img class="img-thumbnail w-25 h-25" src="{{$post->photo}}" alt="{{$post->title}} - miniaturka">
            @endif
            <input type="file" name="image" placeholder="Wybierz obrazek" value="{{old('image')}}" id="image">
        </div>
        <div class="mb-3">
            <label>Kategorie :</label><br/>
            <select required class="form-control" name="categories[]" multiple>
                @foreach($categories as $category)
                    <option value="{{old('categories[id]', $category->id)}}" @if(in_array($category->id, $actualCategories)) selected="selected" @endif>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-floating mb-3">
            <input name="tags" type="text" class="form-control" id="tags" value="{{old('tags')}}" placeholder="Tagi wpisu...">
            <label for="title">Tagi</label>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a class="btn btn-primary" href="{{route('post.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
            <button class="btn btn-primary" type="submit">Zapisz <i class='fa-solid fa-angles-right'></i></button>
        </div>
    </form>
@endsection
