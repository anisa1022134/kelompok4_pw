<?php

namespace App\Http\Controllers;

use App\Models\Pmb;
use Illuminate\Http\Request;

class PmbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pmb.index",['pmb'=>pmb::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storagze.
     */
    public function store(Request $request)
{
    // Validasi data yang diterima
    $validatedData = $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'nik' => 'required|string|max:16',
        'tempat_lahir' => 'required|string|max:255',
        'tanggal_lahir' => 'required|date',
        'status' => 'required|string',
        'jenis_kelamin' => 'required|string',
        'agama' => 'required|string',
        'kewarganegaraan' => 'required|string',
        'email' => 'required|email',
        'no_handphone' => 'required|string|max:15',
        'nama_ibu' => 'required|string|max:255',
        'kecamatan' => 'required|string|max:255',
        'kabupaten' => 'required|string|max:255',
        'provinsi' => 'required|string|max:255',
        'kode_pos' => 'required|string|max:5',
        'alamat_rumah' => 'required|string',
        'asal_sekolah' => 'required|string|max:255',
        'jurusan_sekolah_asal' => 'required|string|max:255',
        'tahun_lulus' => 'required|integer',
        'nilai_raport' => 'required|numeric',
        'akreditasi_sekolah' => 'required|string|max:2',
        'alamat_sekolah' => 'required|string',
        'program_studi' => 'required|string',
        'pernyataan1' => 'sometimes|boolean',
        'pernyataan2' => 'sometimes|boolean',
    ]);

    // Ubah nilai checkbox ke boolean
    $validatedData['pernyataan1'] = $request->has('pernyataan1');
    $validatedData['pernyataan2'] = $request->has('pernyataan2');

    // Simpan data ke database
    Pmb::create($validatedData);

    // Redirect ke halaman home dengan pesan sukses
    return redirect()->route('home')
        ->with('success', 'Data PMB berhasil disimpan!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
