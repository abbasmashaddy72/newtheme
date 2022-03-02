<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Blog;
use Livewire\Component;

class Create extends Component
{
    public $service_id;
    public $title;
    public $image;
    public $tags;
    public $excerpt;
    public $description;

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
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Blog::create($validatedData);

        return $this->redirectRoute('blog.index');
    }

    public function render()
    {
        return view('livewire.admin.blog.create');
    }
}
