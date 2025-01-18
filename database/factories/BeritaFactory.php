<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    /**
     * Tentukan nama model yang terkait dengan factory.
     *
     * @var string
     */
    protected $model = Berita::class;

    /**
     * Definisikan model default.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence, // Membuat judul berita
            'ringkasan' => $this->faker->text(100), // Membuat ringkasan berita
            'gambar' => $this->faker->imageUrl(640, 480, 'cats', true), // URL gambar dummy
            'konten' => $this->faker->paragraph(5), // Membuat konten berita
        ];
    }
}
