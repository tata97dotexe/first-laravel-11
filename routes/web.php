<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return 'Hello World!';
});

Route::get('/call-name-variable', function () {
    $a = 2;
    $b = 3;
    $c = $a + $b;
    return 'Hasil dari variabel $c adalah '.$c;
});
