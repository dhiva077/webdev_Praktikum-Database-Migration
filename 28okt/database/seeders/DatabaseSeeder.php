<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;
use App\Models\Journal;
use App\Models\Mood;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat 5 user dummy
        $users = User::factory(5)->create();

        // Untuk setiap user, buat project, journal, dan mood yang berelasi
        $users->each(function ($user) {
            // Relasi: satu user punya banyak project
            Project::factory(3)->create([
                'user_id' => $user->id,
            ]);

            // Relasi: satu user punya banyak journal
            Journal::factory(2)->create([
                'user_id' => $user->id,
            ]);

            // Relasi: satu user punya banyak mood
            Mood::factory(2)->create([
                'user_id' => $user->id,
            ]);
        });

        // Tambahkan user test hanya jika belum ada
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }
    }
}
