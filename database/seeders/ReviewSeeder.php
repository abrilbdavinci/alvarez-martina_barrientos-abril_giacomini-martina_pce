<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'rating' => 5,
                'product_id' => 1,
                'author' => 'usuario',
                'comment' => 'Amazing product, really improved my skin!',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'rating' => 4,
                'product_id' => 1,
                'author' => 'usuario',
                'comment' => 'Hair feels stronger after using this oil.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
