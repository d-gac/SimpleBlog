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
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function homePage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $posts = PostResource::collection(
            Post::with('user')
                ->where('active', 1)
                ->where('publication_date', '<', now())
                ->orderBy('publication_date','desc')
                ->paginate(5)
        );

        return view('FrontViews.Sections.welcome', [
            'posts' => $posts
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function aboutPage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('FrontViews.Sections.about', [
            'content' => Setting::firstOrFail()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function contactPage(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('FrontViews.Sections.contact', [
            'content' => Setting::firstOrFail()
        ]);
    }

    /**
     * Display a details of the post.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function postDetail($slug): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $post = Post::with('user')
            ->where('slug', $slug)
            ->where('active', 1)
            ->firstOrFail();

        return view('FrontViews.Sections.post', [
            'post' => $post,
        ]);
    }

    /**
     * @param $slug_name
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function userDetail($slug_name): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $user = User::where('slug_name', $slug_name)
            ->first();

        $posts = Post::where('created_by', $user->id)
            ->orderByDesc('publication_date')
            ->where('active', 1)
            ->paginate(5);

        return view('FrontViews.Sections.user', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }
}
