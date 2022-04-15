<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psr\Http\Message\UriInterface;
use Spatie\Sitemap\SitemapGenerator;

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

    public function about()
    {
        return view('admin.pages.about');
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

    public function contactedUs()
    {
        return view('admin.pages.contacted_us');
    }

    public function bookedAppointment()
    {
        return view('admin.pages.booked_appointment');
    }

    public function keywords()
    {
        return view('admin.pages.keywords');
    }

    public function genSitemap()
    {
        SitemapGenerator::create(config('app.url'))->writeToFile('sitemap.xml');

        echo "generated";
    }
}
