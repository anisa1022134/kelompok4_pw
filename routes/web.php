<?php

use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\BeasiswadetailController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\InformatikaController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\PmbController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RipkController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Pmb;

// Rute untuk halaman utama (beranda)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk detail berita
Route::get('/berita/{id}', [HomeController::class, 'show'])->name('berita.show');
Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route untuk tampilkan form tambah berita
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');

// Route untuk menyimpan berita baru
Route::post('/news', [NewsController::class, 'store'])->name('news.store');




Route::resource('/beasiswadetail', BeasiswadetailController::class);
Route::resource('profil', ProfilController::class);
Route::resource('/struktur', StrukturController::class);
Route::resource('/beasiswa',BeasiswaController::class);
Route::resource('/ormawa',OrmawaController::class);
Route::resource('/informatika',InformatikaController::class);
Route::resource('/industri',IndustriController::class);
Route::resource('/kalender',KalenderController::class);
Route::resource('/fasilitas',FasilitasController::class);
Route::resource('/ripk',RipkController::class);


Route::post('/news', [NewsController::class, 'store']); // Tambah berita
Route::get('/news', [NewsController::class, 'index']); // List berita
Route::get('/news/{id}', [NewsController::class, 'show']);



Route::resource('/pmb', PmbController::class);
Route::post('/pmb', [PmbController::class, 'store'])->name('pmb.store');
Route::get('/home', function () {
    return view('home');
})->name('home');
