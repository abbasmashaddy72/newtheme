<?php

namespace App\Http\Livewire\Admin\Service;

use App\Models\Service;
use Livewire\Component;

class Edit extends Component
{
    public $service;

    public $title;
    public $image;
    public $excerpt;
    public $description;

    public function mount($service)
    {
        $data = Service::findOrFail($service);
        $this->title = $data->title;
        $this->image = $data->image;
        $this->excerpt = $data->excerpt;
        $this->description = $data->description;
    }

    protected $rules = [
        'title' => '',
        'image' => '',
        'excerpt' => '',
        'description' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Service::where('id', $this->service)->update($validatedData);

        return $this->redirectRoute('service.index');
    }

    public function render()
    {
        return view('livewire.admin.service.edit');
    }
}
