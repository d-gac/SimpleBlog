@extends('AdminPanel.admin-main')

@section('title')
    Wpisy
@endsection

@section('subtitle')
    Wpisy / {{$post->title}}
@endsection

@section('dashboard')
    <div class="form-floating mb-3">
        <input disabled  name="title" type="text" class="form-control" id="title" value="{{ $post->title }}" placeholder="Tytuł wpisu...">
        <label for="title">Tytuł</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="preview_content" type="text" class="form-control" id="preview_content" value="{{ $post->preview_content }}" placeholder="Treść poglądowa...">
        <label for="preview_content">Podgląd treści</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="content" type="text" class="form-control" id="content" value="{{ $post->content }}" placeholder="Treść poglądowa...">
        <label for="content">Treść</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="active" type="text" class="form-control" id="active" value="{{ $post->active }}" placeholder="Treść poglądowa...">
        <label for="active">Aktywny</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="publication_date" class="form-control" id="publication_date" value="{{ $post->publication_date }}" placeholder="Data publikacji...">
        <label for="publication_date">Data publikacji</label>
    </div>
    <div class="mb-3">
        <label>Kategorie :</label><br/>
        <select disabled class="form-control" name="categories[]" multiple>
            @foreach($categories as $category)
                <option value="{{$category->id}}" @if(in_array($category->id, $actualCategories)) selected="selected" @endif>{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary" href="{{route('post.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
    </div>
@endsection
