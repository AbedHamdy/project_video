<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $videoId = $this->faker->unique()->regexify('[a-zA-Z0-9]{11}');
        
        return [
            'link' => "https://www.youtube.com/watch?v={$videoId}",
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->optional()->paragraph(2),
            'feature' => $this->faker->boolean(20), // 20% احتمال يكون مميز
            'user_name' => $this->faker->name(),
            'content' => $this->faker->paragraph(3),
            "category_id" => Category::inRandomOrder()->value("id"),
        ];
    }
}
