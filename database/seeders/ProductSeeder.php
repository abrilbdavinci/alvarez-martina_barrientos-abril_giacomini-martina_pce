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
            "name" => "Aqua Mat Gel",
            "description" => "Gel limpiador matificante para pieles oleosas. Limpia, Purifica y Seborregula",
            "image" => null,
            "category" => "Cuidado de la piel",
            "price" => "10000.00",
            'created_at' => now(),
            'updated_at' => now()
            ],
        ]);
    }
}
