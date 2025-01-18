<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class beasiswa extends Model
{
    //
    

    // Nama tabel di database (opsional jika nama tabel berbeda dari nama model)
    protected $table = 'beasiswas';

    protected $fillable = [
        'judul',          // Judul berita
        'deskripsi',      // Penerbit berita
        'konten',          // Gambar sampul berita
        'publish_date',   // Tanggal publikasi
        'content',        // Isi berita
    ];

    // Kolom yang disembunyikan saat data dikembalikan (opsional)
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
