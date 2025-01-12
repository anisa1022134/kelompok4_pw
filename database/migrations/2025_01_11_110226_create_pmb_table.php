<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePmbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up():void
    {
        Schema::create('pmb', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama_lengkap');
            $table->string('nik')->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('status');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('email')->unique();
            $table->string('no_handphone');
            $table->string('nama_ibu');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->text('alamat_rumah');
            $table->string('asal_sekolah');
            $table->string('jurusan_sekolah_asal');
            $table->year('tahun_lulus');
            $table->decimal('nilai_raport', 5, 2); // Contoh nilai dengan format desimal
            $table->string('akreditasi_sekolah');
            $table->text('alamat_sekolah');
            $table->string('program_studi');
            $table->boolean('pernyataan1')->default(false); // Checkbox / pernyataan
            $table->boolean('pernyataan2')->default(false); // Checkbox / pernyataan
            $table->timestamps(); // Kolom created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down():void
    {
        Schema::dropIfExists('pmb');
    }
}
