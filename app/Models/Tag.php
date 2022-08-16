<?php

namespace App\Models;

use App\Models\Scopes\TagActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * The posts that belong to the category.
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tags');
    }
}
