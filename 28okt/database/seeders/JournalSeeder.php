<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Journal;
use App\Models\User;

class JournalSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Journal::factory()->count(3)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
