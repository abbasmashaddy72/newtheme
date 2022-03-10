<?php

namespace App\Http\Livewire\Admin;

use App\Services\Helper;
use Livewire\Component;

class About extends Component
{
    public $brief_heading;
    public $brief_excerpt;
    public $achievement_heading;
    public $achievement_excerpt;
    public $work_location_heading;
    public $work_location_excerpt;

    public function mount()
    {
        $this->brief_heading = Helper::get_static_option('brief_heading');
        $this->brief_excerpt = Helper::get_static_option('brief_excerpt');
        $this->achievement_heading = Helper::get_static_option('achievement_heading');
        $this->achievement_excerpt = Helper::get_static_option('achievement_excerpt');
        $this->work_location_heading = Helper::get_static_option('work_location_heading');
        $this->work_location_excerpt = Helper::get_static_option('work_location_excerpt');
    }

    protected $rules = [
        'brief_heading' => '',
        'brief_excerpt' => '',
        'achievement_heading' => '',
        'achievement_excerpt' => '',
        'work_location_heading' => '',
        'work_location_excerpt' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        foreach ($validatedData as $key => $value) {
            Helper::set_static_option($key, $value);
        }

        return $this->redirectRoute('admin.about');
    }

    public function render()
    {
        return view('livewire.admin.about');
    }
}
