<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'health_id_card' => $this->faker->creditCardNumber,
            'name_kh' => $this->faker->name,
            'name_en' => $this->faker->name,
            'date_of_birth' => $this->faker->date,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'nationality' => $this->faker->country,
            'occupation' => $this->faker->jobTitle,
            'phone_number' => $this->faker->phoneNumber,
            'other_id_card' => $this->faker->creditCardNumber,
            'mental_health_id_card' => $this->faker->creditCardNumber,
            'is_disabled' => rand(0,1),
            'province_id' => null,
            'district_id' => null,
            'commune_id' => null,
            'village_id' => null,
            'remark' => null,
        ];
    }
}
