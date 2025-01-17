<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // Nama tabel di database (opsional jika nama tabel berbeda dari nama model)
    protected $table = 'beritas';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'title',          // Judul berita
        'publisher',      // Penerbit berita
        'cover',          // Gambar sampul berita
        'publish_date',   // Tanggal publikasi
        'content',        // Isi berita
    ];

    // Kolom yang disembunyikan saat data dikembalikan (opsional)
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
