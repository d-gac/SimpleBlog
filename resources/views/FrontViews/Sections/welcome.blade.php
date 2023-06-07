@extends('FrontViews.front-main')

@section('title')

    Strona główna

@endsection

@section('content')

    @auth
        <a class="btn btn-success p-2 mb-5" href="{{route('post.create')}}">Dodaj wpis <i
                class='fa fa-plus-square'></i></a>
    @endauth

    @include('FrontViews.Sections.single_post_in_the_list')

@endsection
