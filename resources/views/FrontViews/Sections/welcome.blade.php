@extends('FrontViews.front-main')

@section('content')
    @foreach($posts as $post)

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

        @if(!$loop->last)
            <hr class="my-4"/>
        @endif

    @endforeach
@endsection
