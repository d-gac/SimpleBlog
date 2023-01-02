@extends('FrontViews.front-main')

@section('content')

    <div class="post-preview">

        <h2 class="post-title mb-4">{{$user->name}}</h2>

        <hr class="my-4"/>

        @foreach($posts as $post)


            <a href="{{url('post/'.$post->slug)}}">
                <h2 class="post-title">{{$post->title}}</h2>
            </a>

            <p class="post-meta">
                Opublikowano {{ \Carbon\Carbon::parse($post->publication_date)->diffForHumans() }}
            </p>

            <p>
                {{$post->preview_content}}
            </p>

            @if(!$loop->last)
                <hr class="my-4"/>
            @endif

        @endforeach

        <div class="d-flex justify-content-evenly">
            {{$posts->links()}}
        </div>

    </div>


@endsection
