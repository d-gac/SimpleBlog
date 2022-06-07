@extends('AdminPanel.admin-main')

@section('title')
    Kategorie
@endsection

@section('subtitle')
    Kategorie - Edycja {{$category->name}}
@endsection

@section('dashboard')
    <form action="{{route('category.update', $category->id)}}" method="POST">
        @csrf
        @method('PUT')
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <div class="form-floating mb-3">
            <input required name="name" type="text" class="form-control" id="name" value="{{ $category->name }}" placeholder="Nazwa kategorii...">
            <label for="name">Nazwa</label>
        </div>
        <div class="form-floating mb-3">
            <input name="description" type="text" class="form-control" id="description" value="{{ $category->description }}" placeholder="Opis kategorii...">
            <label for="description">Opis</label>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="{{route('category.index')}}">Powrót</a>
            <button class="btn btn-primary" type="submit">Zapisz</button>
        </div>
    </form>
@endsection
