<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cuenta de usuario
        DB::table('users')->insert([
            'name' => 'Orlando User',
            'email' => 'orlandoduran@user.com',
            'password' => Hash::make('123456789'),
            'account_type' => 'user',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Cuenta de empresa
        DB::table('users')->insert([
            'name' => 'Orlando Company',
            'email' => 'orlandoduran@company.com',
            'password' => Hash::make('123456789'),
            'account_type' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Cuenta de admin
        DB::table('users')->insert([
            'name' => 'Orlando Admin',
            'email' => 'orlandoduran@admin.com',
            'password' => Hash::make('123456789'),
            'account_type' => 'company',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
