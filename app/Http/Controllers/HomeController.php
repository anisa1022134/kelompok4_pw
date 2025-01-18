<?php
namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Menampilkan beranda dengan berita terbaru
    public function index()
{
    // Ambil 6 berita terbaru
    $beritas = Berita::latest()->take(6)->get();

    // Kirim data ke view 'home'
    return view('home', compact('beritas'));
}

    // Menampilkan detail berita berdasarkan ID
    public function show($id)
    {
        // Cari berita berdasarkan ID
        $berita = Berita::findOrFail($id);

        // Kirim data ke view 'berita.detail'
        return view('berita.detail', compact('berita'));
    }
}
