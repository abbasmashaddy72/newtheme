<?php

namespace App\Http\Livewire\Admin;

use App\Models\Work;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutWork extends Component
{
    use WithFileUploads;

    public $name, $location, $timing, $days, $contact_number, $image;

    public $data;

    public $selected_id;

    public $updateMode = false;
    public $isUploaded = false;

    public function render()
    {
        $this->data = Work::latest()->get()->take(10);

        return view('livewire.admin.about-work');
    }

    private function resetInput()
    {
        $this->name = null;
        $this->image = null;
        $this->location = null;
        $this->timing = null;
        $this->days = null;
        $this->contact_number = null;
    }

    public function store()
    {
        $this->validate([
            'name' => '',
            'image' => '',
            'location' => '',
            'timing' => '',
            'days' => '',
            'contact_number' => '',
        ]);

        // $validatedData['image'] = $this->image->store('work_images');

        Work::create([
            'name' => $this->name,
            'location' => $this->location,
            'timing' => $this->timing,
            'days' => $this->days,
            'contact_number' => $this->contact_number,
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Work::findOrFail($id);

        $this->selected_id = $id;
        $this->name = $record->name;
        $this->image = $record->image;
        $this->location = $record->location;
        $this->timing = $record->timing;
        $this->days = $record->days;
        $this->contact_number = $record->contact_number;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => '',
            'image' => '',
            'location' => '',
            'timing' => '',
            'days' => '',
            'contact_number' => '',
        ]);

        $this->isUploaded = true;

        if ($this->selected_id) {
            $record = Work::find($this->selected_id);

            $record->update([
                'name' => $this->name,
                'image' => $this->image,
                'location' => $this->location,
                'timing' => $this->timing,
                'days' => $this->days,
                'contact_number' => $this->contact_number,
            ]);

            $this->resetInput();

            $this->updateMode = false;
        }
    }

    public function delete($id)
    {
        if ($id) {
            $record = Work::where('id', $id);
            $record->delete();
        }
    }
}
