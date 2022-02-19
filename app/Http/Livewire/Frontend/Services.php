<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination;

    public function render()
    {
        $services = Service::latest()->paginate(12);

        return view('livewire.frontend.services', compact(
            'services'
        ));
    }
}
