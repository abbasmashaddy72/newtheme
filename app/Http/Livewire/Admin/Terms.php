<?php

namespace App\Http\Livewire\Admin;

use App\Services\Helper;
use Livewire\Component;

class Terms extends Component
{
    public $terms_description;

    public function mount()
    {
        $this->terms_description = Helper::get_static_option('terms_description');
    }

    protected $rules = [
        'terms_description' => '',
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

        return $this->redirectRoute('admin.terms');
    }

    public function render()
    {
        return view('livewire.admin.terms');
    }
}
