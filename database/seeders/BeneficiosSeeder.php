<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Strength;
class BeneficiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Strength::create([
            'titulo' => 'Beneficios de nuestros productos',
            'descripcionshort' => 'Descubre Una Amplia Gama de Pisos, Tableros y Paneles',
            'descripcion' => '<p>Los productos de Deco Tab te ayudar&aacute;n a renovar y transformar tus ambientes de forma r&aacute;pida, sencilla y econ&oacute;mica. Un claro ejemplo es el <strong>Wall Panel </strong>que funciona como un revestimiento de paredes fabricado con poliuretano de alta densidad que imita la textura y aspecto de la piedra, ladrillo, metal, entre otros.</p>',
        ]);
    }
}
