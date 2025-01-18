<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
{
    $beritas = News::latest()->paginate(6); // Mengambil berita terbaru
    return view('news.create', compact('beritas')); // View untuk daftar berita
}

public function show($id)
{
    $berita = News::findOrFail($id); // Ambil berita berdasarkan ID
    return view('news.detail', compact('berita')); // View untuk detail berita
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan halaman form untuk tambah berita
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'title' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'publish_date' => 'required|date',
            'content' => 'required|string',
        ]);

        // Menyimpan file gambar jika ada
        $coverPath = null;
        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('covers', 'public');
        }

        // Menyimpan berita baru ke database
        $news = News::create([
            'title' => $request->title,
            'publisher' => $request->publisher,
            'cover' => $coverPath,
            'publish_date' => $request->publish_date,
            'content' => $request->content,
        ]);

        // Redirect ke halaman beranda setelah berhasil menambah berita
        return redirect()->route('home')->with('success', 'Berita berhasil ditambahkan!');
    }
}
