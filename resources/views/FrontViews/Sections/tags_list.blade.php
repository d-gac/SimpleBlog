@if($post->tags?->count())

    <h5 class="h6 post-tag">
        @foreach($post->tags as $tag)
            @if($loop->last)
                {{$tag->name}}
            @else
                {{$tag->name}}
            @endif
        @endforeach
    </h5>

@endif
