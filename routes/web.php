<?php

use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\InformatikaController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\PmbController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RipkController;
use App\Http\Controllers\StrukturController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

});

Route::resource('/pmb', PmbController::class)->only(['index', 'create', 'store']);
Route::get('/pmb', [PmbController::class, 'index'])->name('pmb.index');
Route::post('/pmb/store', [PmbController::class, 'store'])->name('pmb.store');
Route::resource('/profil', ProfilController::class);
Route::resource('/struktur', StrukturController::class);
Route::resource('/beasiswa',BeasiswaController::class);
Route::resource('/ormawa',OrmawaController::class);
Route::resource('/informatika',InformatikaController::class);
Route::resource('/industri',IndustriController::class);
Route::resource('/kalender',KalenderController::class);
Route::resource('/fasilitas',FasilitasController::class);
Route::resource('/ripk',RipkController::class);


