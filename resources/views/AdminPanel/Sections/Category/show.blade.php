@extends('AdminPanel.admin-main')

@section('title')
    Kategorie
@endsection

@section('subtitle')
    Kategorie / {{$category->name}}
@endsection

@section('dashboard')
    <div class="form-floating mb-3">
        <input disabled required name="name" type="text" class="form-control" id="name" value="{{ $category->name }}" placeholder="Nazwa kategorii...">
        <label for="name">Nazwa</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="description" type="text" class="form-control" id="description" value="{{ $category->description }}" placeholder="Opis kategorii...">
        <label for="description">Opis</label>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary" href="{{route('category.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
    </div>
@endsection
