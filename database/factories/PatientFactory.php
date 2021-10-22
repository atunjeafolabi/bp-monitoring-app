<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name(),
            'date_of_birth' => $this->faker->dateTime(),
            'address' => $this->faker->address(),
            'email' => $this->faker->unique()->email,
            'phone' => $this->faker->unique()->phoneNumber,
        ];
    }
}
