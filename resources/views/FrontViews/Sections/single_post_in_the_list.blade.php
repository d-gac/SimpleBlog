@if($posts->count())

    @foreach($posts as $post)
        {{--{{dd($post->categories, $post->tags)}}--}}
        <div class="row">
            <div>
                <div class="post-preview">
                    <h4 class="post-title"><a href="{{url('post/'.$post->slug)}}">{{$post->title}}</a></h4>
                    @include('FrontViews.Sections.categories_list')
{{--                    @include('FrontViews.Sections.tags_list')--}}
                    @auth
                        <div class="d-flex">
                            <a class="btn btn-primary p-2 mb-2" href="{{route('post.edit', $post->id)}}">Przejdź do
                                edycji <i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <form action="{{route('post.destroy',$post->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('Usunąć element?')" class="btn btn-danger p-2 mb-2 mx-2"
                                        type="submit">Usuń element <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    @endauth
                    <h5 class="post-subtitle">
                        @if($post->photo)
                            <img @class([
                                            'img-thumbnail img-main-page',
                                            'float-right' => $loop->index % 2 != 0
                                        ])
                                 src="{{$post->photo}}"
                                 alt="{{$post->title}} - miniaturka">
                        @endif
                        {{$post->preview_content}}
                    </h5>
                    <p class="post-meta">
                        Opublikowane przez
                        <a href="{{route('user.detail', $post->user->slug_name)}}">{{$post->user->name}}</a>
                        {{ \Carbon\Carbon::parse($post->publication_date)->diffForHumans() }}
                    </p>
                </div>
            </div>


            @if(!$loop->last)
                <hr class="my-4"/>
            @endif

        </div>
    @endforeach

    <div class="d-flex justify-content-evenly">
        {{$posts->links()}}
    </div>

@else

    <div class="post-preview">
        <p class="post-title text-center">Brak wpisów</p>
    </div>

@endif
