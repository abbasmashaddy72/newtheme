<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BookAppointment;
use App\Models\ContactUs;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookedAppointment = BookAppointment::count();
        $contactedUs = ContactUs::count();
        $servicesCount = Service::count();
        $blogsCount = Blog::count();
        $blogsViewSum = Blog::sum('clicks');
        $reviewsCount = Review::count();

        return view('admin.home', compact([
            'bookedAppointment',
            'contactedUs',
            'servicesCount',
            'blogsCount',
            'blogsViewSum',
            'reviewsCount'
        ]));
    }
}
