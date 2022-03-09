<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Count;
use App\Models\Review;
use App\Models\Service;
use App\Services\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        view()->share('name', Helper::get_static_option('name'));
        view()->share('logo', Helper::get_static_option('logo'));
        view()->share('twitter', Helper::get_static_option('twitter'));
        view()->share('facebook', Helper::get_static_option('facebook'));
        view()->share('instagram', Helper::get_static_option('instagram'));
        view()->share('linkedin', Helper::get_static_option('linkedin'));
        view()->share('google_business', Helper::get_static_option('google_business'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
            'department',
            'about',
            'action_button_text',
            'action_button_link',
            'why_points',
            'hero_img',
            'hero_video',
            'testimonials_excerpt',
            'testimonials',
            'counts',
        ));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function blogs()
    {
        $top_clicks = Blog::max('clicks');
        $top_one = Blog::where('clicks', $top_clicks)->latest()->first();

        $next_top_four = Blog::orderBy('clicks', 'DESC')->whereNotIn('id', [$top_one->id])->limit(4)->get();

        $distinct_top_five = Blog::orderBy('clicks', 'DESC')->distinct('service_id')->limit(5)->get();

        return view('frontend.blogs', compact('top_one', 'next_top_four', 'distinct_top_five'));
    }

    public function singleBlog($id)
    {
        $data = Blog::findOrFail($id);
        Blog::where('id', $id)->increment('clicks');
        $related_blogs = Blog::where('service_id', $data->service_id)->limit(2)->get();

        return view('frontend.single-blog', compact('data', 'related_blogs'));
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
