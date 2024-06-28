<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
