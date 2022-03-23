<?php

namespace App\Http\Livewire\Admin\Review;

use App\Models\Review;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $service_id;
    public $name;
    public $video_url;
    public $image;
    public $message;
    public $stars;

    public $isUploaded = false;
    public $hero_img = false;

    protected $rules = [
        'service_id' => '',
        'name' => '',
        'video_url' => '',
        'image' => '',
        'message' => '',
        'stars' => '',
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
            $validatedData['image'] = $this->image->store('review_image');
        }

        Review::create($validatedData);

        return $this->redirectRoute('review.index');
    }

    public function render()
    {
        return view('livewire.admin.review.create');
    }
}
