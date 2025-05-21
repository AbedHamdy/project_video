<?php

namespace Database\Seeders;

use App\Models\image;
use App\Models\video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        video::factory()
            ->count(10)
            ->hasImages(2) // لكل فيديو صورتين: واحدة cover والثانية content
            ->create()
            ->each(function ($video) {
                // نضمن صورة cover واحدة فقط
                $video->images()->create([
                    'image' => fake()->imageUrl(640, 480, 'tech', true),
                    'image_alt' => 'صورة غلاف',
                    'type' => 'cover',
                ]);

                // وصورة أو أكثر من نوع content
                image::factory()->count(2)->create([
                    'video_id' => $video->id,
                    'type' => 'content',
                ]);
            });
    }
}
