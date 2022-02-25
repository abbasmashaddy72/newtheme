<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Service;
use App\Services\Helper;
use Jenssegers\Agent\Facades\Agent;
use Livewire\Component;
use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination;

    public function render()
    {
        if (Agent::isTablet()) {
            $services = Service::latest()->paginate(6);
        } elseif (Agent::isMobile()) {
            $services = Service::latest()->paginate(3);
        } else {
            $services = Service::latest()->paginate(8);
        }
        $services_excerpt = Helper::get_static_option('services_excerpt');

        return view('livewire.frontend.services', compact(
            'services',
            'services_excerpt'
        ));
    }
}
