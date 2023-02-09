@extends('FrontViews.front-main')

@section('title')

    {{$user->name}}

@endsection

@section('content')

    <div class="post-preview">

        <h2 class="post-title mb-4">Wpisy autora: {{$user->name}}</h2>

        <hr class="my-4"/>

        @foreach($posts as $post)

            <div class="row">
                <div class={{$post->photo ? "col-md-7" : "col-md-12"}}>
                    <div class="post-preview">
                        <a href="{{url('post/'.$post->slug)}}">
                            <h4 class="post-title">{{$post->title}}</h4>
                        </a>
                        <h5 class="post-subtitle">{{$post->preview_content}}</h5>
                        <p class="post-meta">
                            Opublikowane przez
                            <a href="{{route('user.detail', $post->user->slug_name)}}">{{$post->user->name}}</a>
                            {{ \Carbon\Carbon::parse($post->publication_date)->diffForHumans() }}
                        </p>
                    </div>
                </div>
                @if($post->photo)
                    <div class="col-md-5">
                        <img class="img-thumbnail float-start mb-3 me-4" src="{{$post->photo}}"
                             alt="{{$post->title}} - miniaturka">
                    </div>
                @endif


                @if(!$loop->last)
                    <hr class="my-4"/>
                @endif

            </div>

        @endforeach

        <div class="d-flex justify-content-evenly">
            {{$posts->links()}}
        </div>

    </div>

@endsection
