@if($post->categories?->count())

    <h5 class="h6 post-category">
        @foreach($post->categories as $category)
            @if($loop->last)
                {{$category->name}}
            @else
                {{$category->name}},
            @endif
        @endforeach
    </h5>

@endif
