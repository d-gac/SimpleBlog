<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'preview_content' => $this->faker->sentence(10),
            'content' => $this->faker->sentence(30),
            'active' => $this->faker->boolean(),
            'publication_date' => $this->faker->date(),
        ];
    }
}
