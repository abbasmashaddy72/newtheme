<?php

namespace App\Http\Livewire\Admin;

use App\Models\Achievement;
use Livewire\Component;

class AboutAchievements extends Component
{
    public $year, $title, $excerpt, $link;

    public $data;

    public $selected_id;

    public $updateMode = false;

    public function render()
    {
        $this->data = Achievement::latest()->get()->take(10);

        return view('livewire.admin.about-achievements');
    }

    private function resetInput()
    {
        $this->year = null;
        $this->title = null;
        $this->excerpt = null;
        $this->link = null;
    }

    public function store()
    {
        $this->validate([
            'year' => '',
            'title' => '',
            'excerpt' => '',
            'link' => '',
        ]);

        Achievement::create([
            'year' => $this->year,
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'link' => $this->link,
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Achievement::findOrFail($id);

        $this->selected_id = $id;
        $this->year = $record->year;
        $this->title = $record->title;
        $this->excerpt = $record->excerpt;
        $this->link = $record->link;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'year' => '',
            'title' => '',
            'excerpt' => '',
            'link' => '',
        ]);

        if ($this->selected_id) {
            $record = Achievement::find($this->selected_id);

            $record->update([
                'year' => $this->year,
                'title' => $this->title,
                'excerpt' => $this->excerpt,
                'link' => $this->link,
            ]);

            $this->resetInput();

            $this->updateMode = false;
        }
    }

    public function delete($id)
    {
        if ($id) {
            $record = Achievement::where('id', $id);
            $record->delete();
        }
    }
}
