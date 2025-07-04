<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    // function index() {
    //     // return 'ini adalah blog';

    //     // $a = 1;
    //     // $b = 3;
    //     // $c = $a + $b;
    //     // return 'Hasil dari $c adalah '.$c;

    //     // tampilan blog dari halaman blog.blade.php
    //     // return view('blog');

    //     // tampilan blog panggil database $data untuk mengisi tulisan apa aja dari halaman blog.blade.php
    //     // return view('blog', ['data' => 'whatever']);
    //     return view('blog', ['data' => 'pemula laravel']);
    // }

    // tampilan database data table blogs dari sql/HeidiSQL
    function index() {
        // memanggil data table blogs dengan variabel $blogs dan metode get untuk menampilkan data table blogs
        $blogs =  DB::table('blogs')->get();
        // return $blogs;
        return view('blog', ['blogs' => $blogs]);
        // memanggil data table blogs dengan variabel $blogs dan metode dd (Dump & Die) untuk menampilkan data table blogs
        // dd($blogs);
    }
}
