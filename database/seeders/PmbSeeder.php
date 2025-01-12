<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pmb;

class PmbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pmb::factory()->count(50)->create(); // Membuat 50 data contoh
    }
}
