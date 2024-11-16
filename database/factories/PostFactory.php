<?php

namespace Database\Factories;

use App\Models\Categori;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'categori_id' => Categori::factory(),
            'author_id' => User::factory(),
            'slug' => Str::slug(fake()->sentence()),
            'content' => fake()->paragraph(),
        ];
    }
}
