@extends('AdminPanel.admin-main')

@section('title')
    Post
@endsection

@section('subtitle')
    Post
@endsection

@section('dashboard')

    <div class="accordion pb-3" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Dodaj wpis
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    @include('AdminPanel.Sections.Post.create')
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Preview content</th>
                    <th>Content</th>
                    <th>Active</th>
                    <th>Publication date</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Preview content</th>
                    <th>Content</th>
                    <th>Active</th>
                    <th>Publication date</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->preview_content}}</td>
                        <td>{{$post->content}}</td>
                        <td>{{$post->active}}</td>
                        <td>{{$post->publication_date}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
