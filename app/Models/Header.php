<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $table = 'headers';
    protected $fillable = [
        'is_visible_webTitle',
        'webTitle',
        'banner_title',
        'banner_paragraph',
        'banner_photo',
        'is_visible_about',
        'is_visible_contact',
    ];
}
