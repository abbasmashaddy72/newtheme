<?php

namespace App\Http\Controllers;

use App\Models\Count;
use App\Models\Review;
use App\Models\Service;
use App\Services\Helper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = Helper::get_static_option('name');
        $department = Helper::get_static_option('department');
        $about = Helper::get_static_option('about');
        $action_button_text = Helper::get_static_option('action_button_text');
        $action_button_link = Helper::get_static_option('action_button_link');
        $why_points = explode(';', Helper::get_static_option('why_points'));
        $hero_img = Helper::get_static_option('hero_img');
        $hero_video = Helper::get_static_option('hero_video');
        $testimonials_excerpt = Helper::get_static_option('testimonials_excerpt');
        $testimonials = Review::with('service')->get()->take(5);
        $counts = Count::get();

        return view('frontend.main', compact(
            'name',
            'department',
            'about',
            'action_button_text',
            'action_button_link',
            'why_points',
            'hero_img',
            'hero_video',
            'testimonials_excerpt',
            'testimonials',
            'counts'
        ));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function blogs()
    {
        return view('frontend.blogs');
    }

    public function singleBlog($id)
    {
        $data = Service::findOrFail($id);

        return view('frontend.single-blog', compact('data'));
    }

    public function services()
    {
        $services = Service::latest()->paginate(12);

        return view('frontend.services', compact('services'));
    }

    public function singleService($id)
    {
        $data = Service::findOrFail($id);

        return view('frontend.single-service', compact('data'));
    }

    public function terms()
    {
        $data = Helper::get_static_option('terms_description');
        return view('frontend.terms', compact('data'));
    }

    public function privacy()
    {
        $data = Helper::get_static_option('privacy_description');
        return view('frontend.privacy', compact('data'));
    }
}
