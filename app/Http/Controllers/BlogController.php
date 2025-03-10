<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index() {
        // return 'ini adalah blog';

        // $a = 1;
        // $b = 3;
        // $c = $a + $b;
        // return 'Hasil dari $c adalah '.$c;

        // tampilan blog dari halaman blog.blade.php
        // return view('blog');

        // tampilan blog panggil database $data untuk mengisi tulisan apa aja dari halaman blog.blade.php
        // return view('blog', ['data' => 'whatever']);
        return view('blog', ['data' => 'pemula laravel']);
    }
}
