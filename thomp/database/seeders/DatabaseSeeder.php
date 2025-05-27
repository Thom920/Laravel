<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\song; // Ensure the correct model is imported

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create();

        song::factory() // Ensure the correct model is used
            ->count(10) // Adjust the count as needed
            ->create();
    }
}

//thom