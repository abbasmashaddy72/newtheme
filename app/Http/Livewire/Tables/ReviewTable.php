<?php

namespace App\Http\Livewire\Tables;

use App\Models\Review;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class ReviewTable extends LivewireDatatable
{
    public $model = Review::class;
    public $exportable = true;

    public function builder()
    {
        return Review::with(['service']);
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            NumberColumn::name('id')
                ->label('ID')
                ->defaultSort('desc')
                ->filterable(),

            Column::name('name')
                ->searchable()
                ->filterable()
                ->label('Name'),

            Column::name('message')
                ->searchable()
                ->truncate(20)
                ->label('Message'),

            NumberColumn::name('stars')
                ->searchable()
                ->filterable()
                ->label('Stars'),

            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('admin.pages.review.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
