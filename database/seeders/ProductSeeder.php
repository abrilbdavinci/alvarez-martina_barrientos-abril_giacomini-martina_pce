<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Hydrating Serum',
                'description' => 'Lightweight serum for smooth skin.',
                'price' => 29.99,
                'category' => 'skincare',
                'image' => 'products/serum.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hair Growth Oil',
                'description' => 'Strengthens hair from root to tip.',
                'price' => 19.99,
                'category' => 'haircare',
                'image' => 'products/hair_oil.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
