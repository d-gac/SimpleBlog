@extends('AdminPanel.admin-main')

@section('meta-title')
    Ustawienia - Nagłówek
@endsection

@section('title')
    Ustawienia
@endsection

@section('subtitle')
    Ustawienia / Nagłówek
@endsection

@section('dashboard')

    <div class="card mb-4">

        <div class="card-header d-flex justify-content-between">

            <div>
                <i class="fas fa-table me-1"></i> Nagłówek
            </div>

            <div>
                <button disabled onclick="return alert('Nie można dodać nowego elementu!')" class="btn btn-outline-success" style="padding: 0 20px;" href="{{route('header.create')}}">Dodaj <i
                        class='fa fa-plus-square'></i></button>
            </div>
        </div>

        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>Tytuł witryny</th>
                    <th>Banner - tytuł</th>
                    <th>Banner - paragraf</th>
                    <th>Banner - grafika</th>
                    <th>Podstrona "O nas"</th>
                    <th>Podstrona "O Kontakt"</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Tytuł witryny</th>
                    <th>Banner - tytuł</th>
                    <th>Banner - paragraf</th>
                    <th>Banner - grafika</th>
                    <th>Podstrona "O nas"</th>
                    <th>Podstrona "O Kontakt"</th>
                </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td class="w-20">{{$header->is_visible_webTitle ? $header->webTitle : 'Wyświetlanie wyłączone'}}</td>
                        <td class="w-20">{{$header->banner_title ?? 'Brak'}}</td>
                        <td class="w-20">{{$header->banner_paragraph ?? 'Brak'}}</td>
                        <td class="w-20">{{$header->banner_photo ?? 'Brak'}}</td>
                        <td class="w-20">{{$header->is_visible_about ? 'Wyświetlaj' : 'Nie wyświetlaj'}}</td>
                        <td class="w-20">{{$header->is_visible_contact ? 'Wyświetlaj' : 'Nie wyświetlaj'}}</td>
                        <td class="d-flex flex-row bd-highlight">
                            <a class="btn btn-outline-success" href="{{route('header.show', $header->id)}}"><i class='fa fa-file-text'></i></a>
                            <a class="btn btn-outline-primary ms-1" href="{{route('header.edit', $header->id)}}"><i class='fa fa-edit'></i></a>
                            <form action="{{route('header.destroy',$header->id)}}" method="POST">
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
