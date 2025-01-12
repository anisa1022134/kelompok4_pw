<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pmb extends Model
{
    use HasFactory;
    protected $table = 'pmb'; // Nama tabel di database
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = [
        'nama_lengkap',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'status',
        'jenis_kelamin',
        'agama',
        'kewarganegaraan',
        'email',
        'no_handphone',
        'nama_ibu',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'kode_pos',
        'alamat_rumah',
        'asal_sekolah',
        'jurusan_sekolah_asal',
        'tahun_lulus',
        'nilai_raport',
        'akreditasi_sekolah',
        'alamat_sekolah',
        'program_studi',
        'pernyataan1',
        'pernyataan2',
    ];

    public $timestamps = true; // Pastikan timestamps diaktifkan


}
