<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'title' => 'Renueva como un profesional con los productos de Deco Tab',
            'description' => 'Te presentamos las mejores opciones para renovar tus paredes y pisos, como Wall Panel, Mármol UV, Piedra Cincelada, Wall Panel Negro, entre otros materiales de calidad.',
            'botontext1' => 'Ver categorías',
            'link1' => '/catalogo/0',
        ]);
    }
}
