@extends('AdminPanel.admin-main')

@section('meta-title')
    Tagi - {{$tag->name}}
@endsection

@section('title')
    Tagi
@endsection

@section('subtitle')
    Tagi / {{$tag->name}}
@endsection

@section('dashboard')
    <div class="form-floating mb-3">
        <input disabled required name="name" type="text" class="form-control" id="name" value="{{ $tag->name }}" placeholder="Nazwa tagu...">
        <label for="name">Nazwa</label>
    </div>
    <div class="form-floating mb-3">
        <input disabled name="description" type="text" class="form-control" id="description" value="{{ $tag->description }}" placeholder="Opis tagu...">
        <label for="description">Opis</label>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <a class="btn btn-primary" href="{{route('tag.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
    </div>
@endsection
