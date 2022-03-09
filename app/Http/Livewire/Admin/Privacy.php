<?php

namespace App\Http\Livewire\Admin;

use App\Services\Helper;
use Livewire\Component;

class Privacy extends Component
{
    public $privacy_description;

    public function mount()
    {
        $this->privacy_description = Helper::get_static_option('privacy_description');
    }

    protected $rules = [
        'privacy_description' => '',
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

        return $this->redirectRoute('admin.privacy');
    }

    public function render()
    {
        return view('livewire.admin.privacy');
    }
}
