<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table = 'footers';
    protected $fillable = [
        'is_visible_twitter',
        'is_visible_facebook',
        'is_visible_github',
        'is_visible_linkedin',
        'is_visible_youtube',
        'twitter',
        'facebook',
        'github',
        'linkedin',
        'youtube',
    ];
}
