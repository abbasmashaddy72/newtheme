<?php

namespace App\Http\Livewire\Tables;

use App\Models\BookAppointment;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;

class BookAppointmentTable extends LivewireDatatable
{
    public $model = BookAppointment::class;
    public $exportable = true;

    public function builder()
    {
        return BookAppointment::query();
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

            Column::name('email')
                ->searchable()
                ->filterable()
                ->label('Email'),

            Column::name('gender')
                ->searchable()
                ->filterable(['Male', 'FeMale', 'Trans'])
                ->label('Gender'),

            NumberColumn::name('phone')
                ->label('Phone Number')
                ->filterable(),

            NumberColumn::name('age')
                ->label('Age')
                ->filterable(),

            Column::name('address')
                ->searchable()
                ->truncate(20)
                ->label('Address'),

            BooleanColumn::name('previous_record')
                ->label('Previous Records')
                ->filterable(),

            Column::name('previous_record_description')
                ->searchable()
                ->truncate(20)
                ->label('Previous Record Description'),

            DateColumn::name('appointment_date')
                ->label('Appointment Date')
                ->filterable(),

            TimeColumn::name('appointment_time')
                ->label('Appointment Time')
                ->filterable(),

            DateColumn::name('created_at')
                ->label('Booked Date')
                ->filterable(),
        ];
    }
}
