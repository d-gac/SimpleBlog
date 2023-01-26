@extends('AdminPanel.admin-main')

@section('meta-title')
    Instancje - {{$instance->name}}
@endsection

@section('title')
    Instancje
@endsection

@section('subtitle')
    Instancje / {{$instance->name}}
@endsection

@section('dashboard')
    <form>
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
            <input disabled name="name" type="text" class="form-control" id="name" value="{{old('name', $instance->name)}}" placeholder="Nazwa...">
            <label for="title">Nazwa</label>
        </div>
        <div class="form-floating mb-3">
            <input disabled name="domain" type="text" class="form-control" id="domain" value="{{old('domain', $instance->domain)}}"  placeholder="Domena..."/>
            <label for="preview_content">Domena (tylko subdomena)</label>
        </div>
        <div class="form-floating mb-3">
            <textarea disabled name="description" type="text" class="form-control ta-long" id="description" placeholder="Opis...">{{old('description', $instance->description)}}</textarea>
            <label for="content">Opis</label>
        </div>
        <div class="form-check form-switch mb-3 d-flex align-items-center">
            <input type="hidden" name="active" value="0">
            <input disabled name="active" @if(old('active', $instance->active) == 1) checked @endif class="form-check-input checkbox" type="checkbox" id="active" value="1">
            <label class="form-check-label" for="active">Aktywny</label>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a class="btn btn-primary" href="{{route('instance.index')}}"><i class='fa-solid fa-angles-left'></i> Powrót</a>
            <button class="btn btn-primary" type="submit">Zapisz <i class='fa-solid fa-angles-right'></i></button>
        </div>
    </form>
@endsection
