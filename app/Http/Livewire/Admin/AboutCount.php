<?php

namespace App\Http\Livewire\Admin;

use App\Models\Count;
use Livewire\Component;

class AboutCount extends Component
{
    public $data, $count, $title;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function render()
    {
        $this->data = Count::where('for', 'aboutPage')->get();

        return view('livewire.admin.about-count');
    }

    private function resetInputFields()
    {
        $this->count = '';
        $this->title = '';
    }

    public function submit()
    {
        $validatedDate = $this->validate(
            [
                'count.0' => 'required',
                'title.0' => 'required',
                'count.*' => 'required',
                'title.*' => 'required',
            ],
            [
                'count.0.required' => 'count field is required',
                'title.0.required' => 'title field is required',
                'count.*.required' => 'count field is required',
                'title.*.required' => 'title field is required',
            ]
        );

        foreach ($this->count as $key => $value) {
            Count::create(['count' => $this->count[$key], 'title' => $this->title[$key], 'for' => 'aboutPage']);
        }

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Contact Has Been Created Successfully.');
    }

    public function delete($id)
    {
        Count::find($id)->delete();
    }
}
