<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();

        User::factory()
        ->count(5)
        ->create();

        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@email.com',
        //     'password' => Hash::make('123'),
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'user1',
        //     'email' => 'user1@email.com',
        //     'password' => Hash::make('123'),
        // ]);
    }
}
