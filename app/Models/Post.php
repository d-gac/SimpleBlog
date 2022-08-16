<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'title',
        'preview_content',
        'content',
        'active',
        'publication_date',
    ];

    /**
     * The categories that belong to the post.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_categories');
    }

    /**
     * The categories that belong to the post.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }
}
