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
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Pmb;

Route::get('/', function () {
    return view('/home');
});
Route::resource('/', HomeController::class);
Route::resource('/beasiswadetail', BeasiswadetailController::class);
Route::resource('/news', NewsController::class);
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
    return view('/home');
})->name('/home');
