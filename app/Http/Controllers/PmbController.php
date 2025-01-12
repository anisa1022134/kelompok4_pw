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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|string|unique:pmb|max:16',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date_format:Y-m-d',
            'status' => 'required|string|max:50',
            'jenis_kelamin' => 'required|string|max:10',
            'agama' => 'required|string|max:50',
            'kewarganegaraan' => $request->input('kewarganegaraan', 'WNI'), // Default ke WNI
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
            'pernyataan1' => $request->has('pernyataan1'),
            'pernyataan2' => $request->has('pernyataan2'),
        ]);

        // Pastikan timestamps otomatis terisi
        $validatedData['created_at'] = now();
        $validatedData['updated_at'] = now();

        $data['pernyataan1'] = $request->has('pernyataan1') ? 1 : 0;
        $data['pernyataan2'] = $request->has('pernyataan2') ? 1 : 0;

        // Simpan data ke database
        Pmb::create($validatedData);

        return redirect()->route('pmb.index')->with('success', 'Data PMB berhasil disimpan!');
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
