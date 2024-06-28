<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'AdminSMO',
            'email' => 'admin@smoconsultores.com',
            'password' => Hash::make('smoconsultores2024#'),
        ])->assignRole('Admin');
    }
}
