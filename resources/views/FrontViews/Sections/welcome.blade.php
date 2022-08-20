@extends('FrontViews.front-main')

@section('content')
    @foreach($posts as $post)

        <hr class="my-4"/>

        <div class="post-preview">
            <a href="{{url('post/'.$post->slug)}}">
                <h2 class="post-title">{{$post->title}}</h2>
                <h3 class="post-subtitle">{{$post->preview_content}}</h3>
            </a>
            <p class="post-meta">
                Opublikowane przez
                <a href="#!">{{$post->user->name}}</a>
                o {{$post->publication_date}}
            </p>
        </div>

    @endforeach

    <hr class="my-4"/>

    <div class="d-flex justify-content-evenly">
        {{$posts->links()}}
    </div>

@endsection
