<?php

namespace App\Http\Livewire\Admin\Service;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $service;

    public $title;
    public $image;
    public $excerpt;
    public $description;

    public $isUploaded = false;
    public $hero_img = false;

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

        if (gettype($this->image) != 'string') {
            $this->isUploaded = true;
        }
    }

    public function submit()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('services_images');
        }

        Service::where('id', $this->service)->update($validatedData);

        return $this->redirectRoute('service.index');
    }

    public function render()
    {
        return view('livewire.admin.service.edit');
    }
}
