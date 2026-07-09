<?php

namespace Database\Factories;

use App\Models\Model;
use  App\Models\User;
use  App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends Factory<Model>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' =>User::inRandomOrder()->first()?->id ?? User::factory(),
            "post_id"=>Post::inRandomOrder()->first()?->id ??  Post::factory(),
        ];
    }
}
