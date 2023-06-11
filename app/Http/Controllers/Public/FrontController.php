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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function homePage(): \Illuminate\Contracts\View\View
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
    public function postDetail($slug): \Illuminate\Contracts\View\View
    {
        $post = Post::active()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('FrontViews.Sections.post', [
            'post' => $post,
        ]);
    }

    /**
     * @param $slug_name
     * @return View
     */
    public function userDetail($slug_name): \Illuminate\Contracts\View\View
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
    public function aboutPage(): \Illuminate\Contracts\View\View
    {
        return view('FrontViews.Sections.about', [
            'content' => Setting::firstOrFail()
        ]);
    }

    /**
     * @return View
     */
    public function contactPage(): \Illuminate\Contracts\View\View
    {
        return view('FrontViews.Sections.contact', [
            'content' => Setting::firstOrFail()
        ]);
    }
}
