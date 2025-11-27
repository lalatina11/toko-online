<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama'      => 'Admin Sistem',
            'email'     => 'admin@example.com',
            // 'role'      => 0,               // admin
            'status'    => 1,               // aktif
            'password'  => Hash::make('password123'),
            'hp'        => '081234567890',
            'foto'      => null,
        ]);

        User::create([
            'nama'      => 'Super Administrator',
            'email'     => 'superadmin@example.com',
            // 'role'      => 1,               // superadmin
            'status'    => 1,               // aktif
            'password'  => Hash::make('superpass123'),
            'hp'        => '089876543210',
            'foto'      => null,
        ]);
    }
}
