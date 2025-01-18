<?php

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\InformatikaController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\PmbController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RipkController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\BeasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Pmb;

// Rute untuk halaman utama (beranda)
Route::get('/', [HomeController::class, 'index'])->name('home');


// Rute untuk detail berita
Route::get('/berita/{id}', [HomeController::class, 'show'])->name('berita.show');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa');
Route::get('/beasiswa/{id}', [BeasiswaController::class, 'show'])->name('beasiswa.show');

Route::resource('beasiswa', BeasiswaController::class);

Route::resource('profil', ProfilController::class);
Route::resource('/struktur', StrukturController::class);
Route::resource('/ormawa',OrmawaController::class);
Route::resource('/informatika',InformatikaController::class);
Route::resource('/industri',IndustriController::class);
Route::resource('/kalender',KalenderController::class);
Route::resource('/fasilitas',FasilitasController::class);
Route::resource('/ripk',RipkController::class);



Route::resource('/pmb', PmbController::class);
Route::post('/pmb', [PmbController::class, 'store'])->name('pmb.store');
Route::get('/home', function () {
    return view('home');
})->name('home');
