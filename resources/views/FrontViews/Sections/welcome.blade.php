@extends('FrontViews.front-main')

@section('content')

    @if($posts->count())

        @foreach($posts as $post)

            <div class="row">
                <div class="col-md-7">
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
                <div class="col-md-5">
                    @if($post->photo)
                        <img class="img-thumbnail float-start mb-3 me-4" src="{{$post->photo}}" alt="{{$post->title}} - miniaturka">
                    @endif
                </div>
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
