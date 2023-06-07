@extends('FrontViews.front-main')

@section('title')

    {{$user->name}}

@endsection

@section('content')

    <h2 class="post-title mb-4">Wpisy autora: {{$user->name}}</h2>

    @include('FrontViews.Sections.single_post_in_the_list')

@endsection
