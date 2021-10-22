<?php

namespace Tests\Feature;

use App\Http\Livewire\PatientComponent;
use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PatientTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_add_new_patient_when_required_data_is_supplied()
    {
        Livewire::test(PatientComponent::class)
                ->set('full_name', 'Joe Doe')
                ->set('date_of_birth', '2000-10-02')
                ->set('phone', '+319029382')
                ->set('email', $email = 'joe@mail.com')
                ->set('address', 'Lorem 46, 1033 SE Amsterdam, Netherlands')
                ->call('store');

        $this->assertTrue(Patient::where('email', $email)->exists());
    }

    public function test_cannot_add_new_patient_when_insufficient_data_is_supplied()
    {
        Livewire::test(PatientComponent::class)
                ->set('full_name', 'Joe Doe')
                ->set('date_of_birth', '2000-10-02')
                ->set('email', $email ='joe@mail.com')
                ->call('store');

        $this->assertFalse(Patient::where('email', $email)->exists());
    }
}
