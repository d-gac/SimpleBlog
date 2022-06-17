<?php

namespace App\Http\Helpers;

use App\Http\Controllers\Controller;
use http\Env\Request;

class Helper extends Controller
{
    public static function uploadPhoto($post)
    {
        $validatedData = request()->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:524288',
        ]);

        $name = request()->file('image')->getClientOriginalName();
        $path = request()->file('image')->store('images', 'public');

        $post->photo = 'storage/'.$path;

        return redirect('upload-image')->with('status', 'Image Has been uploaded');
    }
}
