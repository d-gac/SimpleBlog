@extends('FrontViews.front-main')

@section('content')

    @if($posts->count())

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


        <div class="d-flex justify-content-evenly">
            {{$posts->links()}}
        </div>

    @else

        <div class="post-preview">
            <p class="post-title text-center">Brak wpisów</p>
        </div>

    @endif

@endsection
