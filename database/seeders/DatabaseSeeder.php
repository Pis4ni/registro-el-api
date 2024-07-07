<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ? test user
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // ? seeders
        $this->call([
            InstitutesSeeder::class,
            StudentsSeeder::class,
            // Aggiungi qui altri seeder se necessario
        ]);
        
    }
}
