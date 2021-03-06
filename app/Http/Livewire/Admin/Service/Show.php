<?php

namespace App\Http\Livewire\Admin\Service;

use App\Models\Service;
use Livewire\Component;

class Show extends Component
{
    public $service;

    public $title;
    public $keywords;
    public $icon;
    public $image;
    public $excerpt;
    public $description;

    public $isUploaded = false;
    public $hero_img = false;

    public function mount($service)
    {
        $data = Service::findOrFail($service);
        $this->title = $data->title;
        $this->keywords = $data->keywords;
        $this->image = $data->image;
        $this->excerpt = $data->excerpt;
        $this->description = $data->description;
    }

    public function render()
    {
        return view('livewire.admin.service.show');
    }
}
