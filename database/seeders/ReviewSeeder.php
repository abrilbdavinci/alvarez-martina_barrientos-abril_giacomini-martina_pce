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
                'comment' => 'Amazing product, really improved my skin!',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'rating' => 4,
                'comment' => 'Hair feels stronger after using this oil.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
