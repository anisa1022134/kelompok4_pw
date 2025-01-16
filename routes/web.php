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
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Models\Pmb;

Route::get('/', function () {
    return view('home');
});

Route::resource('/beasiswadetail', BeasiswadetailController::class);
Route::resource('/berita', BeritaController::class);
Route::resource('profil', ProfilController::class);
Route::resource('/struktur', StrukturController::class);
Route::resource('/beasiswa',BeasiswaController::class);
Route::resource('/ormawa',OrmawaController::class);
Route::resource('/informatika',InformatikaController::class);
Route::resource('/industri',IndustriController::class);
Route::resource('/kalender',KalenderController::class);
Route::resource('/fasilitas',FasilitasController::class);
Route::resource('/ripk',RipkController::class);

Route::resource('/pmb',PmbController::class);

Route::post('/pmb',function(){
   Pmb::create([
    'nama_lengkap'=>request('nama_lengkap'),
    'nik'=>request('nik'),
    'tempat_lahir'=>request('tempat_lahir'),
    'tanggal_lahir'=>request('tanggal_lahir'),
    'status'=>request('status'),
    'jenis_kelamin'=>request('jenis_kelamin'),
    'agama'=>request('agama'),
    'kewarganegaraan'=>request('kewarganegaraan'),
    'email'=>request('email'),
    'no_handphone'=>request('no_handphone'),
    'nama_ibu'=>request('nama_ibu'),
    'kecamatan'=>request('kecamatan'),
    'kabupaten'=>request('kabupaten'),
    'provinsi'=>request('provinsi'),
    'kode_pos'=>request('kode_pos'),
    'alamat_rumah'=>request('alamat_rumah'),
    'asal_sekolah'=>request('asal_sekolah'),
    'jurusan_sekolah_asal'=>request('jurusan_sekolah_asal'),
    'tahun_lulus'=>request('tahun_lulus'),
    'nilai_raport'=>request('nilai_raport'),
    'akreditasi_sekolah'=>request('akreditasi_sekolah'),
    'alamat_sekolah'=>request('alamat_sekolah'),
    'program_studi'=>request('program_studi'),
    'pernyataan1'=>request('pernyataan1'),
    'pernyataan2'=>request('pernyataan2')
   ]);

});
