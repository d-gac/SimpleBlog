@extends('AdminPanel.admin-main')

@section('title')
    Kategorie
@endsection

@section('subtitle')
    Kategorie / Dodaj
@endsection

@section('dashboard')
<form action="{{route('category.store')}}" method="POST">
    @csrf
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert-danger">{{$error}}</div>
        @endforeach
    @endif
    <div class="form-floating mb-3">
        <input required name="name" type="text" class="form-control" id="name" placeholder="Nazwa kategorii...">
        <label for="name">Nazwa</label>
    </div>
    <div class="form-floating mb-3">
        <input name="description" type="text" class="form-control" id="description" placeholder="Opis kategorii...">
        <label for="description">Opis</label>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
        <a class="btn btn-primary" href="{{route('category.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
        <button class="btn btn-primary" type="submit">Zapisz <i class='fa-solid fa-angles-right'></i></button>
    </div>
</form>
@endsection
