<?php

namespace Database\Seeders;

use App\Models\Event;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Jakub Hrnčíř',
            'email' => 'hrncir@zondy.cz',
            'password' => bcrypt('Zondy2025!ski'),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@skikuncice.cz',
            'password' => bcrypt('Kuncice2025!ski'),
        ]);

        Post::factory(32)->create();
        Event::factory(20)->create();

        $this->call([
            AccommodationSeeder::class,
        ]);
    }
}
