<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/mahasiswa', MahasiswaController::class);

// Tugas Praktikum 7 No 3
Route::get('search', [MahasiswaController::class, 'search'])->name('search');

// Latihan JS 9 (Langkah 10)
Route::get('mahasiswa/nilai/{nim}', [MahasiswaController::class, 'nilai'])->name('nilai');

// Praktikum 1 JS 10 (Langkah 6)
Route::resource('articles', ArticleController::class);

// Praktikum 3 JS 10 (Langkah 3)
Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);

// Tugas 2 JS 10
Route::get('/mahasiswa/cetak_pdf/{nim}', [MahasiswaController::class, 'cetak_pdf'])->name('cetak_pdf');
