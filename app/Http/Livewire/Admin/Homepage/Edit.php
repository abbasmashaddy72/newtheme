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

    public $logo;
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
    public $twitter;
    public $facebook;
    public $instagram;
    public $linkedin;
    public $google_business;
    public $embed_map_link;
    public $gr_api;

    public $isUploaded = false;
    public $image = false;

    public function mount()
    {
        $this->logo = Helper::get_static_option('logo');
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
        $this->twitter = Helper::get_static_option('twitter');
        $this->facebook = Helper::get_static_option('facebook');
        $this->instagram = Helper::get_static_option('instagram');
        $this->linkedin = Helper::get_static_option('linkedin');
        $this->google_business = Helper::get_static_option('google_business');
        $this->embed_map_link = Helper::get_static_option('embed_map_link');
        $this->gr_api = Helper::get_static_option('gr_api');
    }

    protected $rules = [
        'logo' => '',
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
        'twitter' => '',
        'facebook' => '',
        'instagram' => '',
        'linkedin' => '',
        'google_business' => '',
        'embed_map_link' => '',
        'gr_api' => '',
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
