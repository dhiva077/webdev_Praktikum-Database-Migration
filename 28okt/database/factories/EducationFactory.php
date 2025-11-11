<?php

namespace Database\Factories;

use App\Models\Education;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationFactory extends Factory
{
    protected $model = Education::class;

    public function definition(): array
    {
        return [
            'school_name' => $this->faker->company(),
            'degree' => $this->faker->randomElement(['Bachelor', 'Master', 'Diploma']),
            'year' => $this->faker->year(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
