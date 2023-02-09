@extends('FrontViews.front-main')

@section('title')

    {{$post->title}}

@endsection

@section('content')

    <div class="post-preview">

        <h2 class="post-title">{{$post->title}}</h2>

        <p class="post-meta">
            Opublikowane przez
            <a href="{{route('user.detail', $post->user->slug_name)}}">{{$post->user->name}}</a>
            {{ \Carbon\Carbon::parse($post->publication_date)->diffForHumans() }}
        </p>

        <p>
            @if($post->photo)
                <img class="img-thumbnail w-25 h-25 float-start mb-3 me-4" src="{{$post->photo}}" alt="{{$post->title}} - miniaturka">
            @endif

            {{$post->content}}
        </p>

    </div>


@endsection
