<?php

namespace App\Http\Livewire\Admin;

use App\Services\Helper;
use Livewire\Component;

class Keywords extends Component
{
    public $about_keywords;
    public $blogs_keywords;
    public $book_appointment_keywords;
    public $contact_us_keywords;
    public $home_keywords;
    public $privacy_keywords;
    public $services_keywords;
    public $terms_keywords;

    public function mount()
    {
        $this->about_keywords = Helper::get_static_option('about_keywords');
        $this->blogs_keywords = Helper::get_static_option('blogs_keywords');
        $this->book_appointment_keywords = Helper::get_static_option('book_appointment_keywords');
        $this->contact_us_keywords = Helper::get_static_option('contact_us_keywords');
        $this->home_keywords = Helper::get_static_option('home_keywords');
        $this->privacy_keywords = Helper::get_static_option('privacy_keywords');
        $this->services_keywords = Helper::get_static_option('services_keywords');
        $this->terms_keywords = Helper::get_static_option('terms_keywords');
    }

    protected $rules = [
        'about_keywords' => '',
        'blogs_keywords' => '',
        'book_appointment_keywords' => '',
        'contact_us_keywords' => '',
        'home_keywords' => '',
        'privacy_keywords' => '',
        'services_keywords' => '',
        'terms_keywords' => '',
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

        return $this->redirectRoute('keywords');
    }

    public function render()
    {
        return view('livewire.admin.keywords');
    }
}
