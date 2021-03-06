<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $blog;

    public $title;
    public $image;
    public $tags;
    public $excerpt;
    public $description;

    public $isUploaded = false;
    public $hero_img = false;

    public function mount($blog)
    {
        $data = Blog::findOrFail($blog);
        $this->title = $data->title;
        $this->image = $data->image;
        $this->tags = $data->tags;
        $this->excerpt = $data->excerpt;
        $this->description = $data->description;
    }

    protected $rules = [
        'title' => '',
        'image' => '',
        'tags' => '',
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
            $validatedData['image'] = $this->image->store('blog_images');
        }

        Blog::where('id', $this->blog)->update($validatedData);

        return $this->redirectRoute('blog.index');
    }

    public function render()
    {
        return view('livewire.admin.blog.edit');
    }
}
