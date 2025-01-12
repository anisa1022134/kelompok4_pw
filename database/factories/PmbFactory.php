<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PmbFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_lengkap' => $this->faker->name,
            'nik' => $this->faker->unique()->numerify('################'),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date('Y-m-d', '2005-12-31'), // Contoh untuk kelahiran di bawah 2006
            'status' => $this->faker->randomElement(['Belum Menikah', 'Menikah']),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'kewarganegaraan' => $this->faker->randomElement(['Indonesia', 'Asing']),
            'email' => $this->faker->unique()->safeEmail,
            'no_handphone' => $this->faker->unique()->phoneNumber,
            'nama_ibu' => $this->faker->name('female'),
            'kecamatan' => $this->faker->citySuffix,
            'kabupaten' => $this->faker->city,
            'provinsi' => $this->faker->state,
            'kode_pos' => $this->faker->postcode,
            'alamat_rumah' => $this->faker->address,
            'asal_sekolah' => $this->faker->company, // Contoh nama sekolah
            'jurusan_sekolah_asal' => $this->faker->randomElement(['IPA', 'IPS', 'Bahasa']),
            'tahun_lulus' => $this->faker->year('-3 years'), // Contoh 3 tahun yang lalu
            'nilai_raport' => $this->faker->randomFloat(2, 60, 100), // Nilai raport antara 60 - 100
            'akreditasi_sekolah' => $this->faker->randomElement(['A', 'B', 'C']),
            'alamat_sekolah' => $this->faker->address,
            'program_studi' => $this->faker->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Teknik Industri']),
            'pernyataan1' => $this->faker->boolean,
            'pernyataan2' => $this->faker->boolean,
        ];
    }
}
