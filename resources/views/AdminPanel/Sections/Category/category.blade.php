@extends('AdminPanel.admin-main')

@section('title')
    Kategorie
@endsection

@section('subtitle')
    Kategorie
@endsection

@section('dashboard')



    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Kategorie <a class="btn btn-outline-secondary" style="padding: 0 20px;" href="{{route('category.create')}}">Dodaj</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>Nazwa</th>
                    <th>Opis</th>
                    <th>Operacje</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Nazwa</th>
                    <th>Opis</th>
                    <th>Operacje</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td class="w-50">{{$category->name}}</td>
                        <td class="w-50">{{$category->description}}</td>
                        <td class="d-flex flex-row bd-highlight">
                            <a class="btn btn-outline-success" href="{{route('category.show', $category->id)}}">Szczegóły</a>
                            <a class="btn btn-outline-primary ms-1" href="{{route('category.edit', $category->id)}}">Edytuj</a>
                            <form action="{{route('category.destroy',$category->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-outline-danger ms-1" type="submit">Usuń</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
