<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->has(Post::factory()->count(10), 'posts')->create();

        //Seed the countries
        $this->call([
            CountriesSeeder::class
            ]);

        $this->command->info('Seeded the countries!');
    }
}
