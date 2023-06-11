<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'posts';

    protected $with = ['user', 'categories', 'tags'];
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

    /**
     * Scope a query to only include active posts.
     */
    public function scopeActive(Builder $query): void
    {
        $query->where('active', 1);
    }

    /**
     * Scope a query to only include active posts.
     */
    public function scopePublished(Builder $query): void
    {
        $query->where('publication_date', '<', now());
    }

    /**
     * Scope a query to order by posts.
     */
    public function scopeOrderByDescPublicationDate(Builder $query): void
    {
        $query->orderByDesc('publication_date');
    }
}
