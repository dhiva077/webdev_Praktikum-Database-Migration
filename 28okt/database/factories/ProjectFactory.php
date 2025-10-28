<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(640, 480, 'cats', true, 'Project'),
            'category' => $this->faker->randomElement(['Web Development', 'Design & Art', 'AI/ML']),
            'status' => $this->faker->randomElement(['completed', 'ongoing', 'upcoming']),
        ];
    }
}
