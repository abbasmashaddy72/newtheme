<?php

namespace App\Http\Livewire\Admin\Review;

use App\Models\Review;
use Livewire\Component;

class Edit extends Component
{
    public $review;

    public $service_id;
    public $name;
    public $image;
    public $message;
    public $stars;

    public function mount($review)
    {
        $data = Review::findOrFail($review);
        $this->service_id = $data->service_id;
        $this->name = $data->name;
        $this->image = $data->image;
        $this->message = $data->message;
        $this->stars = $data->stars;
    }

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

        Review::where('id', $this->review)->update($validatedData);

        return $this->redirectRoute('review.index');
    }

    public function render()
    {
        return view('livewire.admin.review.edit');
    }
}
