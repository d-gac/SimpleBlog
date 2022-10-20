<?php

namespace App\Http\Helpers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use http\Env\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use function Symfony\Component\Translation\t;

class Helper extends Controller
{
    public static function uploadPhoto($post)
    {
        $validatedData = request()->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:524288',
        ]);

        if(request()->image){
            $name = request()->file('image')->getClientOriginalName();
            $path = request()->file('image')->store('images', 'public');
            $post->photo = asset($path);
        } else {
            $post->photo = '';
        }

        return true;
    }

    public static function deletePhoto($photo)
    {
        return File::delete(public_path($photo));
    }

    public static function hasHashTag($tagName)
    {
        if (!str_contains(substr($tagName, 0, 1), '#')) {
            $tagName = substr_replace($tagName, "#", 0, 0);
            return $tagName;
        } else {
            return $tagName;
        }
    }

    public static function uploadBaner($header)
    {
        if (request()->hasFile('banner_photo')) {

            $extension = request()->file('banner_photo')->getClientOriginalExtension();
            $now = Str::slug(Carbon::now()->format('Y-m-d H:m:s'), '-');
            $filename =  'banner-'.$now.'.'.$extension;

            $path = Storage::disk('public')->putFileAs('Banner', request()->file('banner_photo'), $filename);

            $header->banner_photo = asset($path);
        }
    }
}
