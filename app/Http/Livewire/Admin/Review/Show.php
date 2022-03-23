<?php

namespace App\Http\Livewire\Admin\Review;

use App\Models\Review;
use Livewire\Component;

class Show extends Component
{
    public $review;

    public $service_id;
    public $name;
    public $image;
    public $message;
    public $stars;
    public $video_url;

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

    public function render()
    {
        return view('livewire.admin.review.show');
    }
}
