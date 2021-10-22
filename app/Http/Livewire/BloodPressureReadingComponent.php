<?php

namespace App\Http\Livewire;

use App\Models\BloodPressureReading;
use Illuminate\Http\Request;
use Livewire\Component;

class BloodPressureReadingComponent extends Component
{
    public $patient_id;
    public $value;
    public $previous_readings;

    public function render()
    {
        return view('livewire.bp-readings.add');
    }

    public function mount(Request $request)
    {
        if(!$request->patient_id) {
            return redirect()->route('home');
        }
        $this->patient_id = $request->patient_id;
        $this->patient_full_name = $request->full_name;
        $this->previous_readings = BloodPressureReading::where('patient_id', $this->patient_id)->get();
    }

    public function store()
    {
        $this->validate([
            'value' => 'required|numeric',
        ]);

        BloodPressureReading::create([
            'patient_id' => $this->patient_id,
            'value' => $this->value
        ]);

        session()->flash('message', "BP reading successfully added for {$this->patient_full_name}");

        return redirect()->route('home');

    }
}
