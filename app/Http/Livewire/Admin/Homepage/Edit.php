<?php

namespace App\Http\Livewire\Admin\Homepage;

use App\Models\Count;
use App\Services\Helper;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $name;
    public $department;
    public $about;
    public $action_button_text;
    public $action_button_link;
    public $why_points;
    public $hero_img;
    public $hero_video;
    public $testimonials_excerpt;
    public $services_excerpt;
    public $testimonials;
    public $counts;

    public $isUploaded = false;
    public $image = false;

    public function mount()
    {
        $this->name = Helper::get_static_option('name');
        $this->department = Helper::get_static_option('department');
        $this->about = Helper::get_static_option('about');
        $this->action_button_text = Helper::get_static_option('action_button_text');
        $this->action_button_link = Helper::get_static_option('action_button_link');
        $this->why_points = Helper::get_static_option('why_points');
        $this->hero_img = Helper::get_static_option('hero_img');
        $this->hero_video = Helper::get_static_option('hero_video');
        $this->testimonials_excerpt = Helper::get_static_option('testimonials_excerpt');
        $this->services_excerpt = Helper::get_static_option('services_excerpt');
    }

    protected $rules = [
        'name' => '',
        'department' => '',
        'about' => '',
        'action_button_text' => '',
        'action_button_link' => '',
        'why_points' => '',
        'hero_img' => '',
        'hero_video' => '',
        'testimonials_excerpt' => '',
        'services_excerpt' => '',
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

        foreach ($validatedData as $key => $value) {
            if ($key == 'hero_img' && gettype($this->hero_img) != 'string') {
                Helper::set_static_option($key, $this->hero_img->store('hero_img'));
            } else {
                Helper::set_static_option($key, $value);
            }
        }

        return $this->redirectRoute('homepage.edit');
    }

    public function render()
    {
        return view('livewire.admin.homepage.edit');
    }
}
