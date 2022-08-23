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
        <textarea disabled name="preview_content" type="text" class="form-control ta-short" id="preview_content" placeholder="Treść poglądowa...">{{ $post->preview_content }}</textarea>
        <label for="preview_content">Podgląd treści</label>
    </div>
    <div class="form-floating mb-3">
        <textarea disabled name="content" type="text" class="form-control ta-long" id="content" placeholder="Treść...">{{ $post->content }}</textarea>
        <label for="content">Treść</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="publication_date" type="datetime-local" class="form-control" id="publication_date" value="{{ \Carbon\Carbon::parse($post->publication_date)->format('Y-m-d\TH:i:s') }}" placeholder="Data publikacji...">
        <label for="publication_date">Data publikacji</label>
    </div>
    <div class="form-check form-switch mb-3 d-flex align-items-center">
        <input disabled name="active" @if($post->active == 1) checked @endif class="form-check-input checkbox" type="checkbox" id="active" value="1">
        <label class="form-check-label" for="active">Aktywny</label>
    </div>
    <label for="image">Miniaturka</label>
    <div class="form-floating mb-3">
        @if($post->photo)
            <img class="img-thumbnail w-25 h-25" src="{{$post->photo}}" alt="{{$post->title}} - miniaturka">
        @endif
    </div>
    <div class="mb-3">
        <label>Kategorie :</label><br/>
        <select disabled class="form-control" name="categories[]" multiple>
            @foreach($categories as $category)
                <option value="{{$category->id}}" @if(in_array($category->id, $actualCategories)) selected="selected" @endif>{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <a class="btn btn-primary" href="{{route('post.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
    </div>
@endsection
