@extends('AdminPanel.admin-main')

@section('title')
    Dodaj instancję
@endsection

@section('subtitle')
    Instancje / Dodaj
@endsection

@section('dashboard')
    <form action="{{route('instance.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
        <div class="form-floating mb-3">
            <input required name="name" type="text" class="form-control" id="name" value="{{old('name')}}" placeholder="Nazwa...">
            <label for="title">Nazwa</label>
        </div>
        <div class="form-floating mb-3">
            <input required name="domain" type="text" class="form-control" id="domain" value="{{old('domain')}}"  placeholder="Domena..."/>
            <label for="preview_content">Domena (tylko prefiks)</label>
        </div>
        <div class="form-floating mb-3">
            <textarea name="description" type="text" class="form-control ta-long" id="description" placeholder="Opis...">{{old('description')}}</textarea>
            <label for="content">Opis</label>
        </div>
        <div class="form-check form-switch mb-3 d-flex align-items-center">
            <input name="active" class="form-check-input checkbox" type="checkbox" id="active" value="1">
            <label class="form-check-label" for="active">Aktywny</label>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a class="btn btn-primary" href="{{route('instance.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
            <button class="btn btn-primary" type="submit">Zapisz <i class='fa-solid fa-angles-right'></i></button>
        </div>
    </form>
@endsection
