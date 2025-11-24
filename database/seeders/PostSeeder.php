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
                'author' => 'Admin',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
