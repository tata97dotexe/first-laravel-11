<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BlogSeeder::class
            // opsi alternatif buat folder kelas:
            // jika mau buat folder untuk dipanggil kelas "BlogSeeder::class",
            // maka wajib klik mouse kanan lalu muncul import class untuk memanggil folder variabel kelas "BlogSeeder::class"
        ]);
    }
}
