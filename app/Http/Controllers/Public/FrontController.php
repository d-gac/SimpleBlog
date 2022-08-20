<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function homePage()
    {
        $posts = PostResource::collection(Post::with('user')->orderBy('publication_date','desc')->get());
        $settings = Setting::first();

        return view('FrontViews.Sections.welcome', [
            'posts' => $posts,
            'settings' => $settings,
        ]);
    }
    /**
     * Display a details of the post.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function postDetail($slug)
    {
        $post = new PostResource(Post::with('user')
            ->where('slug', $slug)
            ->where('active', 1)
            ->first());

        return view('FrontViews.Sections.post', ['post' => $post]);
    }
}
