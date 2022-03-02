<?php

namespace App\Http\Livewire\Admin\Service;

use App\Models\Service;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $image;
    public $excerpt;
    public $description;

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

        Service::create($validatedData);

        return $this->redirectRoute('service.index');
    }

    public function render()
    {
        return view('livewire.admin.service.create');
    }
}
