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
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the posts.
     *
     * @return View
     */
    public function homePage(): View
    {
        $posts = PostResource::collection(
            Post::active()
                ->published()
                ->orderByDescPublicationDate()
                ->paginate(5)
        );

        return view('FrontViews.Sections.welcome', [
            'posts' => $posts
        ]);
    }

    /**
     * Display a details of the post.
     *
     * @param $slug
     * @return View
     */
    public function postDetail($slug): View
    {
        $post = Post::active()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('FrontViews.Sections.post', [
            'post' => $post,
        ]);
    }

    /**
     * Display a listing of the author's posts.
     *
     * @param $slug_name
     * @return View
     */
    public function userDetail($slug_name): View
    {
        $user = User::where('slug_name', $slug_name)
            ->first();

        $posts = Post::active()
            ->where('created_by', $user->id)
            ->orderByDescPublicationDate()
            ->paginate(5);

        return view('FrontViews.Sections.user', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }

    /**
     * @return View
     */
    public function aboutPage(): View
    {
        return view('FrontViews.Sections.about', [
            'content' => Setting::firstOrFail()
        ]);
    }

    /**
     * @return View
     */
    public function contactPage(): View
    {
        return view('FrontViews.Sections.contact', [
            'content' => Setting::firstOrFail()
        ]);
    }
}
