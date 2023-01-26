@extends('AdminPanel.admin-main')

@section('meta-title')
    Ustawienia - Podstrony
@endsection

@section('title')
    Ustawienia
@endsection

@section('subtitle')
    Ustawienia / Podstrony
@endsection

@section('dashboard')

    <div class="card mb-4">

        <div class="card-header d-flex justify-content-between">

            <div>
                <i class="fas fa-table me-1"></i> Podstrony
            </div>

            <div>
                <button disabled onclick="return alert('Nie można dodać nowego elementu!')"
                        class="btn btn-outline-success" style="padding: 0 20px;" href="{{route('setting.create')}}">
                    Dodaj <i
                        class='fa fa-plus-square'></i></button>
            </div>
        </div>

        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th class="w-20">Kontakt - tytuł</th>
                    <th class="w-20">Kontakt - treść</th>
                    <th class="w-20">O nas - tytuł</th>
                    <th class="w-20">O nas - treść</th>
                    <th class="w-20">Operacje</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th class="w-20">Kontakt - tytuł</th>
                    <th class="w-20">Kontakt - treść</th>
                    <th class="w-20">O nas - tytuł</th>
                    <th class="w-20">O nas - treść</th>
                    <th class="w-20"`>Operacje</th>
                </tr>
                </tfoot>
                @if($settings->is_visible_contact || $settings->is_visible_about)
                    <tbody>
                    <tr>
                        <td class="w-25">{{\Illuminate\Support\Str::words($setting->contact_title, 25) ?? 'Brak'}}</td>
                        <td class="w-25">{{\Illuminate\Support\Str::words($setting->contact_content, 40) ?? 'Brak'}}</td>
                        <td class="w-25">{{\Illuminate\Support\Str::words($setting->about_title, 25) ?? 'Brak'}}</td>
                        <td class="w-25">{{\Illuminate\Support\Str::words($setting->about_content, 40) ?? 'Brak'}}</td>
                        <td class="d-flex flex-row bd-highlight">
                            <a class="btn btn-outline-success" href="{{route('setting.show', $setting->id)}}"><i
                                    class='fa fa-file-text'></i></a>
                            <a class="btn btn-outline-primary ms-1" href="{{route('setting.edit', $setting->id)}}"><i
                                    class='fa fa-edit'></i></a>
                            <form action="{{route('setting.destroy',$setting->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button disabled onclick="return alert('Nie można usunąć tego elementu!')"
                                        class="btn btn-outline-danger ms-1" type="submit"><i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                @endif
            </table>
        </div>
    </div>
@endsection
