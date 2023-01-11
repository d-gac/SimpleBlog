@extends('AdminPanel.admin-main')

@section('meta-title')
    Tagi - Edycja - {{$tag->name}}
@endsection

@section('title')
    Tagi
@endsection

@section('subtitle')
    Tagi / Edycja / {{$tag->name}}
@endsection

@section('dashboard')
    <form action="{{route('tag.update', $tag->id)}}" method="POST">
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
            <input required name="name" type="text" class="form-control" id="name" value="{{ old('name', $tag->name) }}" placeholder="Nazwa tagu...">
            <label for="name">Nazwa</label>
        </div>
        <div class="form-floating mb-3">
            <input name="description" type="text" class="form-control" id="description" value="{{ old('description', $tag->description) }}" placeholder="Opis tagu...">
            <label for="description">Opis</label>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a class="btn btn-primary" href="{{route('tag.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
            <button class="btn btn-primary" type="submit">Zapisz <i class='fa-solid fa-angles-right'></i></button>
        </div>
    </form>
@endsection
