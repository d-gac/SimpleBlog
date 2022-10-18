<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Tenant;
use App\Models\User;
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
//        $tenant1 = Tenant::create(['id' => 'testowa']);
//        $tenant1->domains()->create(['domain' => 'testowa.localhost']);

        $posts = PostResource::collection(
            Post::with('user')
                ->orderBy('publication_date','desc')
                ->paginate(5)
        );

        return view('FrontViews.Sections.welcome', [
            'posts' => $posts,
            'header' => Header::firstOrFail(),
            'footer' => Footer::firstOrFail(),
        ]);
    }
    /**
     * Display a details of the post.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function postDetail($slug)
    {
        $post = Post::with('user')
            ->where('slug', $slug)
            ->where('active', 1)
            ->first();

        return view('FrontViews.Sections.post', [
            'post' => $post,
            'header' => Header::firstOrFail(),
            'footer' => Footer::firstOrFail()
        ]);
    }

    public function userDetail($slug_name)
    {
        $user = User::with('posts')
            ->where('slug_name', $slug_name)
            ->first();

        return view('FrontViews.Sections.user', [
            'user' => $user,
            'header' => Header::firstOrFail(),
            'footer' => Footer::firstOrFail()
        ]);
    }
}
