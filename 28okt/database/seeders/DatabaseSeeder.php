<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;
use App\Models\Education;
use App\Models\Skill;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat 5 user dummy
        $users = User::factory(5)->create();

        // Untuk setiap user, buat project, education, dan skill yang berelasi
        $users->each(function ($user) {

            Project::factory(3)->create([
                'user_id' => $user->id,
            ]);

            Education::factory(2)->create([
                'user_id' => $user->id,
            ]);

            Skill::factory(3)->create([
                'user_id' => $user->id,
            ]);
        });

        if (!User::where('email', 'dhivakesuma@gmail.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'dhivakesuma@gmail.com',
            ]);
        }
    }
}
