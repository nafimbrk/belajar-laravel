<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/blog', function () {
    // ambil data dari database
    // $profile = 'aku programmer jago';
    // return view('blog', ['data' => $profile]);
// })->name('blog');

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/{id}', function (Request $request) {
    // anggap aja melakukan update data & berhasil
    return redirect()->route('blog');
    // return 'ini adalah blog ' . $id;
});