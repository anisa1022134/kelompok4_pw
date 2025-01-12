<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pmb;

class PmbController extends Controller
{
    // Tampilkan semua data PMB
    public function index()
{
    $pmbs = Pmb::all(); // Ambil semua data
    return view('pmb.index', compact('pmbs'));
}


    // Tampilkan form untuk membuat data baru
    public function create()
    {
        return view('pmb.create');
    }

    // Simpan data baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|string|unique:pmb|max:16',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'status' => 'required|string|max:50',
            'jenis_kelamin' => 'required|string|max:10',
            'agama' => 'required|string|max:50',
            'kewarganegaraan' => 'required|string|max:50',
            'email' => 'required|email|unique:pmb',
            'no_handphone' => 'required|string|max:15',
            'nama_ibu' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:10',
            'alamat_rumah' => 'required|string',
            'asal_sekolah' => 'required|string|max:255',
            'jurusan_sekolah_asal' => 'required|string|max:255',
            'tahun_lulus' => 'required|integer',
            'nilai_raport' => 'required|numeric|between:0,100',
            'akreditasi_sekolah' => 'required|string|max:5',
            'alamat_sekolah' => 'required|string',
            'program_studi' => 'required|string|max:255',
            'pernyataan1' => 'required|boolean',
            'pernyataan2' => 'required|boolean',
        ]);

        Pmb::create($validated);

        return redirect()->route('pmb.index')->with('success', 'Data PMB berhasil disimpan!');
    }

    // Tampilkan detail data PMB
    public function show(Pmb $pmb)
    {
        return view('pmb.show', compact('pmb'));
    }

    // Tampilkan form untuk edit data
    public function edit(Pmb $pmb)
    {
        return view('pmb.edit', compact('pmb'));
    }

    // Update data di database
    public function update(Request $request, Pmb $pmb)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik' => "required|string|unique:pmb,nik,{$pmb->id}|max:16",
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'status' => 'required|string|max:50',
            'jenis_kelamin' => 'required|string|max:10',
            'agama' => 'required|string|max:50',
            'kewarganegaraan' => 'required|string|max:50',
            'email' => "required|email|unique:pmb,email,{$pmb->id}",
            'no_handphone' => 'required|string|max:15',
            'nama_ibu' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:10',
            'alamat_rumah' => 'required|string',
            'asal_sekolah' => 'required|string|max:255',
            'jurusan_sekolah_asal' => 'required|string|max:255',
            'tahun_lulus' => 'required|integer',
            'nilai_raport' => 'required|numeric|between:0,100',
            'akreditasi_sekolah' => 'required|string|max:5',
            'alamat_sekolah' => 'required|string',
            'program_studi' => 'required|string|max:255',
            'pernyataan1' => 'required|boolean',
            'pernyataan2' => 'required|boolean',
        ]);

        $pmb->update($validated);

        return redirect()->route('pmb.index')->with('success', 'Data PMB berhasil diperbarui!');
    }

    // Hapus data
    public function destroy(Pmb $pmb)
    {
        $pmb->delete();

        return redirect()->route('pmb.index')->with('success', 'Data PMB berhasil dihapus!');
    }
}
