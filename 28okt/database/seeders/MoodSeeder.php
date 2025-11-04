<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mood;
use App\Models\User;

class MoodSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Mood::factory()->create([
                'user_id' => $user->id,
                'status' => fake()->randomElement(['Happy', 'Sad', 'Calm', 'Angry']),
            ]);
        }
    }
}
