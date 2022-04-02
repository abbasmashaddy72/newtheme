<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Blog;
use App\Models\Count;
use App\Models\Review;
use App\Models\Service;
use App\Models\Work;
use App\Services\Helper;

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
        view()->share('embed_map_link', Helper::get_static_option('embed_map_link'));
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
        $top_action_button_text = Helper::get_static_option('top_action_button_text');
        $bottom_action_button_text = Helper::get_static_option('bottom_action_button_text');
        $top_action_button_link = Helper::get_static_option('top_action_button_link');
        $bottom_action_button_link = Helper::get_static_option('bottom_action_button_link');
        $why_points = explode(';', Helper::get_static_option('why_points'));
        $hero_img = Helper::get_static_option('hero_img');
        $hero_video = Helper::get_static_option('hero_video');
        $testimonials_excerpt = Helper::get_static_option('testimonials_excerpt');
        $counts = Count::where('for', 'homePage')->get();
        $gr_api = Helper::get_static_option('gr_api');
        $gr_count_api = Helper::get_static_option('gr_count_api');

        return view('frontend.main', compact(
            'department',
            'about',
            'top_action_button_text',
            'bottom_action_button_text',
            'top_action_button_link',
            'bottom_action_button_link',
            'why_points',
            'hero_img',
            'hero_video',
            'testimonials_excerpt',
            'counts',
            'gr_api',
            'gr_count_api'
        ));
    }

    public function about()
    {
        $brief_heading = Helper::get_static_option('brief_heading');
        $brief_excerpt = Helper::get_static_option('brief_excerpt');
        $achievement_heading = Helper::get_static_option('achievement_heading');
        $achievement_excerpt = Helper::get_static_option('achievement_excerpt');
        $counts = Count::where('for', 'aboutPage')->get();
        $achievements = Achievement::orderBy('year', 'DESC')->get()->groupBy('year');

        return view('frontend.about', compact(
            'brief_heading',
            'brief_excerpt',
            'achievement_heading',
            'achievement_excerpt',
            'counts',
            'achievements',
        ));
    }

    public function blogs()
    {
        $top_clicks = Blog::max('clicks');
        $top_one = Blog::where('clicks', $top_clicks)->latest()->first();

        $next_top_four = Blog::orderBy('clicks', 'DESC')->whereNotIn('id', [$top_one->id])->limit(4)->get();

        $distinct_top_five = Blog::orderBy('clicks', 'DESC')->distinct('service_id')->limit(5)->get();

        return view('frontend.blogs', compact(
            'top_one',
            'next_top_four',
            'distinct_top_five'
        ));
    }

    public function singleBlog($id)
    {
        $data = Blog::findOrFail($id);
        Blog::where('id', $id)->increment('clicks');
        $related_blogs = Blog::where('service_id', $data->service_id)->limit(2)->get();

        return view('frontend.single-blog', compact(
            'data',
            'related_blogs'
        ));
    }

    public function services()
    {
        $services = Service::latest()->paginate(12);

        return view('frontend.services', compact('services'));
    }

    public function singleService($id)
    {
        $data = Service::findOrFail($id);
        $gr_api = Helper::get_static_option('gr_api');
        $gr_count_api = Helper::get_static_option('gr_count_api');

        return view('frontend.single-service', compact('data', 'gr_api', 'gr_count_api'));
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

    public function bookAppointment()
    {
        return view('frontend.book_appointment');
    }

    public function contactUs()
    {
        return view('frontend.contact_us');
    }
}
