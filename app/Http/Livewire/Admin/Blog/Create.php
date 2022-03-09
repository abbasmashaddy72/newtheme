<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $service_id;
    public $title;
    public $image;
    public $tags;
    public $excerpt;
    public $description;

    public $isUploaded = false;

    protected $rules = [
        'service_id' => '',
        'title' => '',
        'image' => '',
        'tags' => '',
        'excerpt' => '',
        'description' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        if (gettype($this->hero_img) != 'string') {
            $this->isUploaded = true;
        }
    }

    public function submit()
    {
        $validatedData = $this->validate();
        $validatedData['image'] = $this->image->store('blog_images');

        Blog::create($validatedData);

        return $this->redirectRoute('blog.index');
    }

    public function render()
    {
        return view('livewire.admin.blog.create');
    }
}
