@extends('FrontViews.front-main')

@section('content')

    <h2>{{$content->contact_title ?? 'Kontakt - tytuł'}}</h2>

    <hr>

    <p>{{$content->contact_content ?? 'Kontakt - treść'}}</p>

@endsection
