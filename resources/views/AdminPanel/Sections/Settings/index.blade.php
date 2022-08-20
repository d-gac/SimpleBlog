@extends('AdminPanel.admin-main')

@section('title')
    Ustawienia
@endsection

@section('subtitle')
    Ustawienia
@endsection

@section('dashboard')

    <div class="card mb-4">

        <div class="card-header d-flex justify-content-between">

            <div>
                <i class="fas fa-table me-1"></i> Ustawienia
            </div>

            <div>
                <button disabled onclick="return alert('Nie można dodać nowego elementu!')" class="btn btn-outline-success" style="padding: 0 20px;" href="{{route('setting.create')}}">Dodaj <i
                        class='fa fa-plus-square'></i></button>
            </div>
        </div>

        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>Twitter</th>
                    <th>Facebook</th>
                    <th>Github</th>
                    <th>Linkedin</th>
                    <th>Youtube</th>
                    <th>Oparacje</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Twitter</th>
                    <th>Facebook</th>
                    <th>Github</th>
                    <th>Linkedin</th>
                    <th>Youtube</th>
                    <th>Oparacje</th>
                </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td class="w-20">{{$setting->is_visible_twitter ? 'Wyświetlaj' : 'Nie wyświetlaj'}}</td>
                        <td class="w-20">{{$setting->is_visible_facebook ? 'Wyświetlaj' : 'Nie wyświetlaj'}}</td>
                        <td class="w-20">{{$setting->is_visible_github ? 'Wyświetlaj' : 'Nie wyświetlaj'}}</td>
                        <td class="w-20">{{$setting->is_visible_linkedin ? 'Wyświetlaj' : 'Nie wyświetlaj'}}</td>
                        <td class="w-20">{{$setting->is_visible_youtube ? 'Wyświetlaj' : 'Nie wyświetlaj'}}</td>
                        <td class="d-flex flex-row bd-highlight">
                            <a class="btn btn-outline-success" href="{{route('setting.show', $setting->id)}}"><i class='fa fa-file-text'></i></a>
                            <a class="btn btn-outline-primary ms-1" href="{{route('setting.edit', $setting->id)}}"><i class='fa fa-edit'></i></a>
                            <form action="{{route('setting.destroy',$setting->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button disabled onclick="return alert('Nie można usunąć tego elementu!')" class="btn btn-outline-danger ms-1" type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
