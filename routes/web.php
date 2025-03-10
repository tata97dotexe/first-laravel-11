<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
// Route::get('/blog', function () {
//     // ambil data dari database
//     $profile = 'aku programmer noob';
//     return view('blog', ['data' => $profile]);
// });

// 3. route parameter
// Route::get('/blog/1', function () {
//     return 'ini adalah blog 1';
// });

// opsi 2 route parameter panggil digunakan parameter variabel halaman momor 'ID' untuk halamman nomor urutan otomatis
// Route::get('/blog/{id}', function () {
//     return 'ini adalah blog 1';
// });

// opsi 3 route parameter panggil digunakan parameter variabel halaman nomor 'ID' dengan kembali fungsi kode urutan nomor otomatis
// Route::get('/blog/{id}', function ($id) {
//     return 'ini adalah blog '.$id;
// });

// opsi 4 route parameter panggil digunakan parameter variabel halaman 'ID' dan 'Title'
// Route::get('/blog/{id}/{title}', function ($id) {
//     return 'ini adalah blog '.$id;
// });

// opsi 5 route parameter panggil digunakan parameter variabel halaman 'ID atau Title' dengan http request
// Route::get('/blog/{id}', function (Request $request) {
//     // $name = $request -> name;
//     // $password = $request -> password;
//     return 'ini adalah blog '.$request->id;
// });

// 4. named routes
// opsi 5 view routes panggil digunakan ambil data dari database
Route::get('/blog', function () {
    // ambil data dari database
    $profile = 'aku programmer noob';
    return view('blog', ['data' => $profile]);
})->name('blog');

Route::get('/blog/{id}', function (Request $request) {
    // anggap aja melakukan update data & berhasil
    return redirect()->route(('blog'));
});
