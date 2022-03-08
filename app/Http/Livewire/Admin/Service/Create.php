<?php

namespace App\Http\Livewire\Admin\Service;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $image;
    public $excerpt;
    public $description;

    public $isUploaded = false;

    protected $rules = [
        'title' => '',
        'image' => '',
        'excerpt' => '',
        'description' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        $this->isUploaded = true;
    }

    public function submit()
    {
        $validatedData = $this->validate();
        $validatedData['image'] = $this->image->store('service_images');

        Service::create($validatedData);

        return $this->redirectRoute('service.index');
    }

    public function render()
    {
        return view('livewire.admin.service.create');
    }
}
