<?php

namespace Database\Factories;

use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Factories\Factory;
use  App\Models\Post;
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
              'post_id' => Post::inRandomOrder()->first()?->id ?? Post::factory(),
              'content'=>fake()->paragraph(3),
        ];
    }
}
