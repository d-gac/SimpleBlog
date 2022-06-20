<?php

namespace App\Http\Helpers;

use App\Http\Controllers\Controller;
use http\Env\Request;
use Illuminate\Support\Facades\File;
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
            $post->photo = '/storage/'.$path;
        } else {
            $post->photo = '';
        }

        return true;
    }

    public static function deletePhoto($photo)
    {
        return File::delete(public_path($photo));
    }
}
