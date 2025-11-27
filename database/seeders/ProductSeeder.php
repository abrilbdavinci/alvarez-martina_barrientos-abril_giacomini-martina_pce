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
            "image" => "products/RfJ7ILfQX5p9FiYVQCMVqZbVtl0imdDWdLpnTbJ8.jpg",
            "category" => "Cuidado de la piel",
            "price" => "10000.00",
            "created_at" => now(),
            "updated_at" => now(),
            ],
            [
            "name" => "PEPTILAB Bálsamo para labios",
            "description" => "Peptilab es un bálsamo de tratamiento nutritivo para labios",
            "image" => "products/SzX5PkfkAmMZJFq5I2U03QDO426sHxBVwvrDV38c.png",
            "category" => "Cuidado de la piel",
            "price" => "15000.00",
            "created_at" => now(),
            "updated_at" => now(),
            ],
            [
            "name" => "Serum Postbiótico VOL.4: BIOMA Biotecnología Argentina",
            "description" => "El nuevo serum postbiótico VOLUMEN 4 BIOMA equilibra el microbioma",
            "image" => "products/i9md2kK4wU0wKRcKhhCxp79i89yb4IjP7xDnfkno.jpg",
            "category" => "Cuidado de la piel",
            "price" => "30000.00",
            "created_at" => now(),
            "updated_at" => now(),
            ],
            [
            "name" => "Argan Repair Shampoo",
            "description" => "Higieniza delicadamente el cabello. Retira la grasitud y residuos acumulados sin alterar las propiedades naturales de la fibra capilar.",
            "image" => "products/ea7eTPDZsik3FHeVaxdUutM8WBvtwiClRYtdPMBf.png",
            "category" => "Cuidado del cabello",
            "price" => "20500.00",
            "created_at" => now(),
            "updated_at" => now(),
            ],
            [
            "name" => "Hyalu Shine Bi-Phase",
            "description" => "Tratamiento acondicionador específicamente formulado para cabello deshidratado, opaco y sometido a daño continuo...",
            "image" => "products/eDfZrfmCKOsfZ14ULy1z2Fl4pinxj1G9UGVH5whn.png",
            "category" => "Cuidado del cabello",
            "price" => "7000.00",
            "created_at" => now(),
            "updated_at" => now(),
            ],
            [
            "name" => "Pads Desmaquillantes",
            "description" => "Los Pads Desmaquillantes Get The Look Grandes son la solución ideal para una limpieza profunda y efectiva de tu rostro. Estos suaves y reutilizables pads te permiten eliminar el maquillaje, la suciedad y el exceso de grasa sin irritar tu piel.",
            "image" => "products/eujnzOU2d3Yn4ExhgK2pkJ28OcA23D53Iq9cSpPx.png",
            "category" => "Herramientas",
            "price" => "8600.00",
            "created_at" => now(),
            "updated_at" => now(),
            ],
        ]);
    }
}
