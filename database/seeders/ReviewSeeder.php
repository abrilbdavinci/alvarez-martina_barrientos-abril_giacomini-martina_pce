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
            "user_id" => 1,
            "product_id" => 2,
            "rating" => 5,
            "author" => "marG",
            "comment" => "buenisimo para el invierno",
            "created_at" => now(),
            "updated_at" => now(),
            ],
            [
            "user_id" => 1,
            "product_id" => 6,
            "rating" => 3,
            "author" => "marG",
            "comment" => "se me hicieron una mugre enseguida, considerar que si te los comprás los tenés que poner a lavar al menos una vez por semana si usas maquillaje seguido",
            "created_at" => now(),
            "updated_at" => now(),
            ],
            [
            "user_id" => 1,
            "product_id" => 5,
            "rating" => 5,
            "author" => "marG",
            "comment" => "LE DARÍA 10 ESTRELLAS, LO AMOOOO",
            "created_at" => now(),
            "updated_at" => now(),
            ],
        ]);
    }
}
