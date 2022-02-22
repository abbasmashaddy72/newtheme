<?php

namespace App\Http\Controllers;

use App\Models\Service;
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
        return view('frontend.main');
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
}
