<?php

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StrukturController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/pmb', function () {
    return view('pmb');
});

Route::resource('/profil', ProfilController::class);
Route::resource('/struktur', StrukturController::class);
