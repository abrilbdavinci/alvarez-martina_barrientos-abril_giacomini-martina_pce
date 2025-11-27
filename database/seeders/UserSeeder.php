<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
    {
        public function run(): void
        {
            DB::table('users')->insert([
                [
                    'name' => 'marG',
                    'role' => 'admin',
                    'email' => 'marG@kalm.com',
                    'password' => Hash::make('parcial2'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'abru',
                    'role' => 'admin',
                    'email' => 'abru@kalm.com',
                    'password' => Hash::make('parcial2'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'marA',
                    'role' => 'admin',
                    'email' => 'marA@kalm.com',
                    'password' => Hash::make('parcial2'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'humilde usuario',
                    'role' => 'user',
                    'email' => 'usu@ario.com',
                    'password' => Hash::make('nosoyadmin'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
