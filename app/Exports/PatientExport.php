<?php

namespace App\Exports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PatientExport implements FromCollection, WithHeadings
{
    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'id',
            'Patient Name',
            'DOB',
            'Address',
            'Email',
            'Phone'
        ];
    }

    /**
     * @return void
     */
    public function collection()
    {
        ini_set('memory_limit','300M');
        return Patient::all();
    }
}
