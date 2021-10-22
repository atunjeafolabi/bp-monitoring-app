<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;

class PatientComponent extends Component
{
    public $full_name;
    public $date_of_birth;
    public $phone;
    public $email;
    public $address;

    public function render()
    {
        return view('livewire.patient.add');
    }

    public function store()
    {
        $this->validate([
            'full_name' => 'required|min:5',
            'date_of_birth' => 'required',
            'phone' => 'required|numeric|unique:patients',
            'email' => 'required|email|unique:patients',
            'address' => 'required|string',
        ]);

        Patient::create([
            'full_name' => $this->full_name,
            'date_of_birth' => $this->date_of_birth,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address
        ]);

        session()->flash('message', 'Patient successfully added.');

        return redirect()->route('index');

    }
}
