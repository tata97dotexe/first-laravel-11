<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// 1. basic routing
// Route::get('/greeting', function () {
//     return 'Hello World!';
// });

// Route::get('/call-name-variable', function () {
//     $a = 2;
//     $b = 3;
//     $c = $a + $b;
//     return 'Hasil dari variabel $c adalah '.$c;
// });

// 2. view routes
// Route::get('/blog', function () {
//    return view('blog');
// });

// opsi 2 view routes panggil digunakan variabel view tanpa 'get'
// Route::view('/blog', 'blog');

// opsi 3 view routes panggil digunakan variabel nama-nama (misalkan data atau bebas nama variabel akan dipanggil untuk menampilkan post view blog.blade.php) dengan 'get'
// Route::get('/blog', function () {
//     return view('blog', ['data' => 'saya programmer pemula']);
// });

// opsi 4 view routes panggil digunakan variabel view dan nama-nama (misalkan data atau bebas nama variabel akan dipanggil untuk menampilkan post view blog.blade.php) tanpa 'get'
// Route::view('blog', 'blog', ['data' => 'saya programmer pemula']);

// opsi 5 view routes panggil digunakan ambil data dari database
Route::get('/blog', function () {
    // ambil data dari database
    $profile = 'aku programmer noob';
    return view('blog', ['data' => $profile]);
});
