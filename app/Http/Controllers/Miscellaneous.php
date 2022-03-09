<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class Miscellaneous extends Controller
{
    public function __construct()
    {
        view()->share('currentRouteName', Route::currentRouteName());
    }

    public function homepage()
    {
        return view('admin.pages.homepage_edit');
    }

    public function terms()
    {
        return view('admin.pages.terms');
    }

    public function privacy()
    {
        return view('admin.pages.privacy');
    }

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
