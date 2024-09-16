<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\General;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        General::create([
            'address' => 'Av. Antonio Miroquesada 457',
            'inside' => 'Ofic. 1301',
            'district' => 'Magdalena del Mar',
            'schedule' => "De Lunes a Viernes de 9:00am a 6:00pm y Sábados de 9:00am a 1:00pm",
            'city' => 'Lima',
            'country' => 'Lima - Perú',
            'cellphone' => '(+51) 908 866 179' ,
            'office_phone' => '5555-1025' ,
            'email' => 'info@pslgroup.pe',
            'facebook' => 'www.facebook.com',
            'instagram' => 'www.instagram.com',
            'youtube' => 'https://www.linkedin.com/',
            'twitter' => 'www.twitter.com',
            'whatsapp' => '51908866179' ,
            'form_email' => 'info@pslgroup.pe',
            'business_hours' => 'horas',
            'mensaje_whatsapp' => 'Hola, mi nombre es [Tu Nombre]. Quisiera recibir información acerca sus servicios . Estoy atento(a) a su respuesta.',
            'htop' =>'El servicio lo es todo, nuestra gente lo hace posible.',
            'aboutus' => 'En PARTNERS LOGISTICS nos encargamos de brindar soluciones integrales para las operaciones de comercio internacional, Posicionándonos en los cinco continentes gracias a la confianza y seguridad que brinda nuestra red de agentes y socios; si deseas hacer negocios en cualquier parte del mundo, somos tu mejor aliado.'

        ]);
    }
}
