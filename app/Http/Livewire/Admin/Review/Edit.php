<?php

namespace App\Http\Livewire\Admin\Review;

use App\Models\Review;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $review;

    public $service_id;
    public $name;
    public $video_url;
    public $image;
    public $message;
    public $stars;

    public $isUploaded = false;
    public $hero_img = false;

    public function mount($review)
    {
        $data = Review::findOrFail($review);
        $this->service_id = $data->service_id;
        $this->name = $data->name;
        $this->image = $data->image;
        $this->message = $data->message;
        $this->stars = $data->stars;
        $this->video_url = $data->video_url;
    }

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

        Review::where('id', $this->review)->update($validatedData);

        return $this->redirectRoute('review.index');
    }

    public function render()
    {
        return view('livewire.admin.review.edit');
    }
}
