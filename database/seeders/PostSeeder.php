<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Top 5 Skincare Tips',
                'content' => 'Discover the most effective skincare tips for healthy glowing skin.',
                'category' => 'skincare',
                'image' => 'posts/skincare_tips.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'How to Strengthen Your Hair',
                'content' => 'Learn how to nourish and strengthen your hair from root to tip.',
                'category' => 'haircare',
                'image' => 'posts/haircare_guide.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
