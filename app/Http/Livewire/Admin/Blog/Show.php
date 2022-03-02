<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Blog;
use Livewire\Component;

class Show extends Component
{
    public $blog;

    public $service_id;
    public $title;
    public $image;
    public $tags;
    public $excerpt;
    public $description;

    public function mount($blog)
    {
        $data = Blog::findOrFail($blog);
        $this->service_id = $data->service_id;
        $this->title = $data->title;
        $this->image = $data->image;
        $this->tags = $data->tags;
        $this->excerpt = $data->excerpt;
        $this->description = $data->description;
    }

    public function render()
    {
        return view('livewire.admin.blog.show');
    }
}
