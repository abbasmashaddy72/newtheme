<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class Miscellaneous extends Controller
{
    public function image_upload(Request $request)
    {
        $blog = new Blog();
        $blog->id = 0;
        $blog->exists = true;
        $image = $blog->addMediaFromRequest('upload')->toMediaCollection('images');


        return response()->json([
            'url' => $image->getUrl('thumb')
        ]);
    }
}
