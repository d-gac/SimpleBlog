@extends('FrontViews.front-main')

@section('title')

    {{$post->title}}

@endsection

@section('content')

    <div class="post-preview">

        <h2 class="post-title">{{$post->title}}</h2>
        @include('FrontViews.Sections.categories_list')
{{--        @include('FrontViews.Sections.tags_list')--}}
        <p class="post-meta">
            Opublikowane przez
            <a href="{{route('user.detail', $post->user->slug_name)}}">{{$post->user->name}}</a>
            {{ \Carbon\Carbon::parse($post->publication_date)->diffForHumans() }}
        </p>

        <p>
            @if($post->photo)
                <img class="img-thumbnail w-50 h-25 float-start mb-2 me-3 w-mobile-100" src="{{$post->photo}}"
                     alt="{{$post->title}} - miniaturka">
            @endif

            {!! $post->content !!}
        </p>

    </div>

@endsection
