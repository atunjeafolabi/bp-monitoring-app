<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PatientTable extends DataTableComponent
{
    public function render()
    {
        return parent::render();
    }

    public function columns(): array
    {
        return [
            Column::make('Patient', 'full_name')
                  ->sortable()
                  ->searchable(),
            Column::make('DOB', 'date_of_birth')
                  ->sortable(),
            Column::make('Address', 'address')
                  ->sortable()
                  ->searchable(),
            Column::make('Email', 'email')
                  ->sortable()
                  ->searchable(),
            Column::make('Phone', 'phone')
                  ->sortable()
                  ->searchable(),
        ];
    }

    public function query(): Builder
    {
        return Patient::query();
    }

    public function getTableRowUrl($row): string
    {
        return route('bp-readings.add', [
            'patient_id' => $row->id,
            'full_name' => $row->full_name
        ]);
    }
}
