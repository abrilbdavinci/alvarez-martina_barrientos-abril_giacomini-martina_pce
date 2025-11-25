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
                'comment' => 'Muy bueno producto, me encantó.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
