<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Commentaire;
use App\Models\Like;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
       Post::factory(20)->create();
       User::factory(10)->create();
       Commentaire::factory(20)->create();
       Like::factory(50)->create();
    }
}
