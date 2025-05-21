<?php

namespace Database\Factories;

use App\Models\image;
use App\Models\video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    protected $model = image::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(640, 480, 'cats', true),
            'image_alt' => $this->faker->words(3, true),
            'type' => $this->faker->randomElement(['cover', 'content']),
            'video_id' => video::factory(),
        ];
    }
}
