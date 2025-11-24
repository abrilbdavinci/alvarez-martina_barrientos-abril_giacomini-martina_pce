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
                'title' => 'He simplificado mi rutina de ‘skincare’ y estoy obsesionada con los resultados',
                'content' => 'Para simplificar mi rutina de skincare, retomé un consejo que me dio una vez un dermatólogo: para cuidarte la piel solo te hacen falta cuatro cosas: un limpiador, un sérum, una crema facial y protector solar. No pude evitar añadir también un tónico o una esencia en honor a la filosofía K-beauty. Los resultados fueron sorprendentes. En una semana, mi piel estaba más rellena, más tersa y más suave. Desde que sigo esta rutina, apenas tengo granos y mi piel ya no es tan grasa como antes. ¿Por qué? "Al reducir al mínimo el uso de productos potencialmente irritantes o secantes, la piel puede haber equilibrado naturalmente su nivel de grasa, lo que a su vez mejora los niveles de hidratación y suaviza la textura de la piel", explica la dermatóloga Divya Shokeen, con consulta en California. El Dr. Brendan Camp, dermatólogo de Nueva York, lo suscribe y subraya que para mejorrar la salud de la piel hay que darle “tiempo y espacio suficientes para asimilar los productos y recuperarse de su impacto".',
                'category' => 'skincare',
                'image' => 'posts/skincare_tips.jpg',
                'author' => 'Kiana Murden',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
