@extends('AdminPanel.admin-main')

@section('meta-title')
    Tagi
@endsection

@section('title')
    Tagi
@endsection

@section('subtitle')
    Tagi
@endsection

@section('dashboard')

    <div class="card mb-4">

        <div class="card-header d-flex justify-content-between">

            <div>
                <i class="fas fa-table me-1"></i> Tagi
            </div>

            <div>
                <a class="btn btn-outline-success" style="padding: 0 20px;" href="{{route('tag.create')}}">Dodaj <i class='fa fa-plus-square'></i></a>
            </div>

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
                @foreach($tags as $tag)
                    <tr>
                        <td class="w-50">{{$tag->name}}</td>
                        <td class="w-50">{{$tag->description}}</td>
                        <td class="d-flex flex-row bd-highlight">
                            <a class="btn btn-outline-success" href="{{route('tag.show', $tag->id)}}"><i class='fa fa-file-text'></i></a>
                            <a class="btn btn-outline-primary ms-1" href="{{route('tag.edit', $tag->id)}}"><i class='fa fa-edit'></i></a>
                            <form action="{{route('tag.destroy',$tag->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('Usunąć element?')" class="btn btn-outline-danger ms-1" type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
