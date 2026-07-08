<?php

namespace Database\Factories;

use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Factories\Factory;
use  App\Models\Post;
use  App\Models\User;
/**
 * @extends Factory<Commentaire>
 */
class CommentaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
              'user_id'=> User::inRandomOrder()->first()?->id ?? User::factory(),
              'post_id' => Post::inRandomOrder()->first()?->id ?? Post::factory(),
              'content'=>fake()->paragraph(3),
        ];
    }
}
