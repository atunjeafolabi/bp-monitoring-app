<?php

namespace App\Http\Livewire;

use App\Exports\PatientExport;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.home');
    }


    public function exportPatientAsCsv()
    {
//        ini_set('memory_limit','30M');
        return Excel::download(new PatientExport(), 'patients.csv');
    }
}
