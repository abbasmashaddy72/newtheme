<?php

namespace App\Http\Livewire\Admin\Review;

use App\Models\Review;
use Livewire\Component;

class Create extends Component
{
    public $service_id;
    public $name;
    public $image;
    public $message;
    public $stars;

    protected $rules = [
        'service_id' => '',
        'name' => '',
        'image' => '',
        'message' => '',
        'stars' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Review::create($validatedData);

        return $this->redirectRoute('review.index');
    }

    public function render()
    {
        return view('livewire.admin.review.create');
    }
}
