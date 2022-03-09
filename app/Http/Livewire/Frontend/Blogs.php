<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Blog;
use Jenssegers\Agent\Facades\Agent;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;

    public function render()
    {
        if (Agent::isTablet()) {
            $blogs = Blog::latest()->paginate(6);
        } elseif (Agent::isMobile()) {
            $blogs = Blog::latest()->paginate(1);
        } else {
            $blogs = Blog::latest()->paginate(8);
        }

        return view('livewire.frontend.blogs', compact('blogs'));
    }
}
