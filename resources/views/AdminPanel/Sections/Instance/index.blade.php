@extends('AdminPanel.admin-main')

@section('meta-title')
    Instancje
@endsection

@section('title')
    Instancje
@endsection

@section('subtitle')
    Instancje
@endsection

@section('dashboard')

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">

            <div>
                <i class="fas fa-table me-1"></i> Instancje
            </div>

            <div>
                <a class="btn btn-outline-success" style="padding: 0 20px;" href="{{route('instance.create')}}">Dodaj <i
                        class='fa fa-plus-square'></i></a>
            </div>

        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>Nazwa</th>
                    <th>Domena</th>
                    <th>Opis</th>
                    <th>Aktywny</th>
                    <th>Operacje</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Nazwa</th>
                    <th>Domena</th>
                    <th>Opis</th>
                    <th>Aktywny</th>
                    <th>Operacje</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($instances as $instance)
                    <tr>
                        <td class="w-20">{{$instance->name}}</td>
                        <td class="w-20"><a href="http://{{$instance->domain}}" target="_blank">{{$instance->domain}}</a></td>
                        <td class="w-20">{{$instance->description}}</td>
                        <td>{{$instance->active}}</td>
                        <td class="d-flex flex-row bd-highlight test">
                            <a class="btn btn-outline-success" href="{{route('instance.show', $instance->id)}}"><i
                                    class='fa fa-file-text'></i></a>
                            <a class="btn btn-outline-primary ms-1" href="{{route('instance.edit', $instance->id)}}"><i
                                    class='fa fa-edit'></i></a>
                            <form action="{{route('instance.destroy',$instance->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('Usunąć element?')" class="btn btn-outline-danger ms-1"
                                        type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
