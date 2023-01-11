@extends('FrontViews.front-main')

@section('content')

    <h2>{{$content->about_title ?? 'O nas - tytuł'}}</h2>

    <hr>

    <p>{{$content->about_content ?? 'O nas - treść'}}</p>

@endsection
