<?php

namespace App\Http\Livewire\Admin\Homepage;

use App\Models\Count;
use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;

class Sliders extends Component
{
    use WithFileUploads;

    public $data, $image;
    public $isUploaded = false;
    public $hero_img = false;

    public function render()
    {
        $this->data = Slider::where('where', 'homePage')->get();

        return view('livewire.admin.homepage.sliders');
    }

    private function resetInputFields()
    {
        $this->image = '';
    }

    protected $rules = [
        'image' => 'required',
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
            $validatedData['image'] = $this->image->store('slider_images');
        }

        Slider::create(['image' => $validatedData['image'], 'where' => 'homePage']);

        $this->resetInputFields();

        session()->flash('message', 'Slider Image Uploaded Successfully.');
    }

    public function delete($id)
    {
        Slider::find($id)->delete();
    }
}
