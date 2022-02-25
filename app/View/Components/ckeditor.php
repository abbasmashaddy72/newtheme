<?php

namespace App\View\Components;

use ProtoneMedia\LaravelFormComponents\Components\FormInput;

class ckeditor extends FormInput
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ckeditor');
    }
}
