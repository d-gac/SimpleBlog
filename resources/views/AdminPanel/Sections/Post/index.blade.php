@extends('AdminPanel.admin-main')

@section('meta-title')
    Wpisy
@endsection

@section('title')
    Wpisy
@endsection

@section('subtitle')
    Wpisy
@endsection

@section('dashboard')

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">

            <div>
                <i class="fas fa-table me-1"></i> Wpisy
            </div>

            <div>
                <a class="btn btn-outline-success" style="padding: 0 20px;" href="{{route('post.create')}}">Dodaj <i
                        class='fa fa-plus-square'></i></a>
            </div>

        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>Miniaturka</th>
                    <th>Tytuł</th>
                    <th>Skrót treści</th>
                    <th>Aktywny</th>
                    <th>Data publikacji</th>
                    <th>Kategoria</th>
                    <th>Operacje</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Miniaturka</th>
                    <th>Tytuł</th>
                    <th>Skrót treści</th>
                    <th>Aktywny</th>
                    <th>Data publikacji</th>
                    <th>Kategoria</th>
                    <th>Operacje</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td class="w-20">
                            @if($post->photo)
                                <img class="img-thumbnail" src="{{$post->photo}}" alt="{{$post->title}} - miniaturka">
                            @else
                                Brak miniaturki
                            @endif
                        </td>
                        <td class="w-20">{{$post->title}}</td>
                        <td class="w-20">{{$post->preview_content}}</td>
                        <td>{{$post->active}}</td>
                        <td class="w-20">{{$post->publication_date}}</td>
                        <td class="w-20">
                            @foreach($post->categories as $category)
                                @if($loop->last)
                                    {{$category->name}}
                                @else
                                    {{$category->name}},
                                @endif
                            @endforeach
                        </td>
                        <td class="d-flex flex-row bd-highlight test">
                            <a class="btn btn-outline-success" href="{{route('post.show', $post->id)}}"><i
                                    class='fa fa-file-text'></i></a>
                            <a class="btn btn-outline-primary ms-1" href="{{route('post.edit', $post->id)}}"><i
                                    class='fa fa-edit'></i></a>
                            <form action="{{route('post.destroy',$post->id)}}" method="POST">
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
