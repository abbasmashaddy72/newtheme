<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Review;
use Jenssegers\Agent\Facades\Agent;
use Livewire\Component;
use Livewire\WithPagination;

class Testimonials extends Component
{
    use WithPagination;

    protected $paginationTheme = 'simple-tailwind';

    public function render()
    {
        if (Agent::isTablet()) {
            $testimonials = Review::with('service')->latest()->paginate(1);
        } elseif (Agent::isMobile()) {
            $testimonials = Review::with('service')->latest()->paginate(1);
        } else {
            $testimonials = Review::with('service')->latest()->paginate(1);
        }

        return view('livewire.frontend.testimonials', compact('testimonials'));
    }
}
