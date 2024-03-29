<?php

namespace App\Observers;

use App\Http\Helpers\Helper;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function PHPUnit\Framework\isNull;

class PostObserver
{
    /**
     * Handle the Post "creating" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function creating(Post $post)
    {
        $post->created_by = Auth::id();
        $post->updated_by = Auth::id();
        $post->slug = Str::slug($post->title, '-');

        Helper::uploadPhoto($post);
    }

    /**
     * Handle the Post "created" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function created(Post $post)
    {
        $post->categories()->attach(request()->categories);

        $tags = array_map('strval', explode(' ', request()->tags));
        foreach ($tags as $tag) {
            $tag = Helper::hasHashTag($tag);
            $tagCheck = Tag::where('name', $tag)->first();
            if (is_null($tagCheck)){
                $row = DB::transaction(function () use ($tag) {
                    return Tag::create(
                        [
                            'name' => $tag,
                            'description' => 'Tag dodany poprzez wpis'
                        ]
                    );
                });
             $post->tags()->attach($row->id);
            }
        }
    }

    /**
     * Handle the Post "updating" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function updating(Post $post)
    {
        $old_photo = $post->photo;
        $post->photo = $old_photo;
        $post->slug = Str::slug($post->title, '-');

        if (request()->hasFile('image')) {
            if (Helper::uploadPhoto($post)) {
                Helper::deletePhoto($old_photo);
            }
        }

    }

    /**
     * Handle the Post "updated" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function updated(Post $post)
    {
        $post->categories()->sync(request()->categories);
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function deleted(Post $post)
    {
        if ($post->photo) {
            Helper::deletePhoto($post->photo);
        }
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param \App\Models\Post $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
