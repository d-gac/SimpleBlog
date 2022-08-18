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
        'created_by',
        'updated_by',
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

    /**
     * The user that belong to the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
