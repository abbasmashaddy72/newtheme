<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Work;
use App\Services\Helper;
use Livewire\Component;

class WorkLocation extends Component
{
    public function render()
    {
        $work_location_heading = Helper::get_static_option('work_location_heading');
        $work_location_excerpt = Helper::get_static_option('work_location_excerpt');
        $works = Work::get();

        return view('livewire.frontend.work-location', compact(
            'work_location_heading',
            'work_location_excerpt',
            'works'
        ));
    }
}
