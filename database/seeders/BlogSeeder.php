<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->truncate();

        DB::table('blogs')->insert([
            'title' => 'blog 2',
            'description' => 'ini adalah description blog 2',
        ]);

        DB::table('blogs')->insert([
            'title' => 'blog 3',
            'description' => 'ini adalah description blog 3',
        ]);

        DB::table('blogs')->insert([
            'title' => 'blog 4',
            'description' => 'ini adalah description blog 4',
        ]);
    }
}
