<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mood>
 */
class MoodFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => 1, // nanti di Seeder akan diganti otomatis dengan $user->id
            'mood' => $this->faker->randomElement(['Happy', 'Sad', 'Excited', 'Calm', 'Tired']),
            'note' => $this->faker->sentence(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}