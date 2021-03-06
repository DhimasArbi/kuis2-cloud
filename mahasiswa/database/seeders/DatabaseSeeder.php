<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Mahasiswa::factory(25)->create();
        $this->call([
            KelasSeeder::class,
            MataKuliahSeeder::class,
            MahasiswaSeeder::class,
            MahasiswaMataKuliahSeeder::class,
        ]);
    }
}
