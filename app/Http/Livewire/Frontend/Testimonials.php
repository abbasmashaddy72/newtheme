<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Review;
use App\Services\Helper;
use Livewire\Component;
use Livewire\WithPagination;

class Testimonials extends Component
{
    use WithPagination;

    public $service_id;

    protected $paginationTheme = 'simple-tailwind';

    public function render()
    {
        if (empty($this->service_id)) {
            $testimonials = Review::with('service')->latest()->paginate(1);
        } else {
            $testimonials = Review::with('service')->where('service_id', $this->service_id)->latest()->paginate(1);
        }

        return view('livewire.frontend.testimonials', compact('testimonials'));
    }
}
