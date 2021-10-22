<?php

namespace Database\Seeders;

use App\Models\BloodPressureReading;
use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Takes around 30 seconds to seed
         * TODO: find ways to optimize later
        */
        for ($i=0; $i < 100; $i++) {
            Patient::factory()
                ->count(500)
                ->create();
        }
    }
}
