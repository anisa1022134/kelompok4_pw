<x-layout>
    <x-slot:title>
        PMB
    </x-slot>
    <main>
        <div class="container mt-4 shadow-xl p-4 form-container">
            <h1 class="text-center">FORM PENDAFTARAN MAHASISWA BARU</h1>
            <form action="{{route('pmb.index')}}" method="post">
                @csrf

                <!-- DATA PRIBADI -->
                <div class="text-center alert alert-secondary">
                    <strong>DATA PRIBADI</strong>
                </div>
                <div class="border-bottom border-black mb-3">
                    <div class="row mb-3">
                        <div class="col-sm-7">
                            <label class="m-2">Nama Lengkap :</label>
                            <input class="form-control" type="text" placeholder="Masukkan Nama Lengkap" name="nama_lengkap" required>
                        </div>
                        <div class="col-sm">
                            <label class="m-2">Nomor Identitas (NIK) :</label>
                            <input class="form-control" type="text" placeholder="Masukkan Nomor Identitas" name="nik" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label class="m-2">Tempat Lahir :</label>
                            <input class="form-control" type="text" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" required>
                        </div>
                        <div class="col-sm-3">
                            <label class="m-2">Tanggal Lahir :</label>
                            <input class="form-control" type="date" name="tanggal_lahir" required>
                        </div>
                        <div class="col-sm">
                            <label class="m-2">Status :</label>
                            <select class="form-control" name="status" required>
                                <option value="">Pilih</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Duda">Duda</option>
                                <option value="Janda">Janda</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label class="m-2">Jenis Kelamin :</label>
                            <div>
                                <input type="radio" name="jenis_kelamin" value="Laki-Laki" required> Laki-Laki<br>
                                <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label class="m-2">Agama :</label>
                            <select class="form-control" name="agama" required>
                                <option value="">Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label class="m-2">Kewarganegaraan :</label>
                            <div>
                                <input type="radio" name="kewarganegaraan" value="WNI" required> WNI<br>
                                <input type="radio" name="kewarganegaraan" value="WNA" required> WNA
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label class="m-2">E-mail :</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan E-mail" required>
                        </div>
                        <div class="col-sm-3">
                            <label class="m-2">No. Handphone :</label>
                            <input type="number" name="no_handphone" class="form-control" placeholder="Masukkan Nomor Handphone" required>
                        </div>
                        <div class="col-sm">
                            <label class="m-2">Ibu Kandung :</label>
                            <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu Kandung" required>
                        </div>
                    </div>
                </div>

                <!-- DATA ALAMAT DOMISILI -->
                <div class="alert-secondary mt-4 mb-3">
                    <h5><strong>DATA ALAMAT DOMISILI</strong></h5>
                </div>
                <div class="border-bottom border-black mb-3">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="m-2">Kecamatan :</label>
                            <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan" required>
                        </div>
                        <div class="col">
                            <label class="m-2">Kabupaten :</label>
                            <input type="text" name="kabupaten" class="form-control" placeholder="Masukkan Kabupaten" required>
                        </div>
                        <div class="col">
                            <label class="m-2">Provinsi :</label>
                            <input type="text" name="provinsi" class="form-control" placeholder="Masukkan Provinsi" required>
                        </div>
                        <div class="col">
                            <label class="m-2">Kode Pos :</label>
                            <input type="number" name="kode_pos" class="form-control" placeholder="Masukkan Kode Pos" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="m-2">Alamat Rumah :</label>
                        <textarea class="form-control no-resize" name="alamat_rumah" rows="3" required></textarea>
                    </div>
                </div>

                <!-- DATA PENDIDIKAN TERAKHIR -->
                <div class="alert-secondary mt-4 mb-3">
                    <h5><strong>DATA PENDIDIKAN TERAKHIR</strong></h5>
                </div>
                <div class="border-bottom border-black mb-3">
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label class="m-2">Asal Sekolah :</label>
                            <input type="text" name="asal_sekolah" class="form-control" placeholder="Masukkan Asal Sekolah" required>
                        </div>
                        <div class="col-sm">
                            <label class="m-2">Jurusan :</label>
                            <select class="form-control" name="jurusan_sekolah_asal" required>
                                <option value="">Pilih</option>
                                <option value="SMA-IPA">SMA - IPA</option>
                                <option value="SMA-IPS">SMA - IPS</option>
                                <option value="MAN-IPA">MAN - IPA</option>
                                <option value="MAN-IPS">MAN - IPS</option>
                                <option value="SMK-Ekonomi">SMK - Ekonomi</option>
                                <option value="SMK-Teknik">SMK - Teknik</option>
                                <option value="SMK-Keterampilan">SMK - Keterampilan</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label class="m-2">Tahun Lulus :</label>
                            <input type="number" min="1900" max="{{ date('Y') }}" name="tahun_lulus" class="form-control" placeholder="Masukkan Tahun Lulus" required>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label class="m-2">Rata-Rata Nilai Raport :</label>
                            <input type="number" step="0.01" name="nilai_raport" class="form-control" placeholder="Masukkan Rata-Rata Nilai Raport" required>

                        </div>
                        <div class="col-sm-3">
                            <label class="m-2">Akreditasi Sekolah :</label>
                            <select class="form-control" name="akreditasi_sekolah" required>
                                <option value="">Pilih</option>
                                <option value="A">A (Amat Baik)</option>
                                <option value="B">B (Baik)</option>
                                <option value="C">C (Cukup)</option>
                                <option value="D">D (Tidak Terakreditasi)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="m-2">Alamat Sekolah :</label>
                        <textarea class="form-control no-resize" name="alamat_sekolah" rows="3" required></textarea>
                    </div>
                </div>

                <!-- PILIHAN PROGRAM STUDI -->
                <div class="alert-secondary mt-4 mb-3">
                    <h5><strong>PILIHAN PROGRAM STUDI</strong></h5>
                </div>
                <div class="col-sm mb-3">
                    <label class="m-2">Pilih Program Studi :</label>
                    <select class="form-control" name="program_studi" required>
                        <option value="">Pilih</option>
                        <option value="S1 - Teknik Industri">S1 - Teknik Industri</option>
                        <option value="S1 - Informatika">S1 - Informatika</option>
                    </select>
                </div>

                <!-- PERNYATAAN -->
                <div class="alert alert-success text-center">
                    <strong>
                        <input type="checkbox" name="pernyataan1" value="1" required>
                        Saya menyatakan bahwa data yang saya isikan di atas sudah benar.<br>
                        <input type="checkbox" name="pernyataan2" value="1" required>
                        Saya bersedia menerima sanksi pembatalan penerimaan di program studi yang saya pilih apabila saya melanggar pernyataan ini.
                    </strong>
                </div>

                <!-- BUTTONS -->
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" name="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </main>
</x-layout>
