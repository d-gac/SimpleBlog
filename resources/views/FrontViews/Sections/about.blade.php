@extends('FrontViews.front-main')

@section('title')

    O nas

@endsection

@section('content')

    <h2>{!! $content->about_title ?? 'O nas - tytuł'!!}</h2>

    <hr>

    <p>{!! $content->about_content ?? 'O nas - treść'!!}</p>

@endsection
