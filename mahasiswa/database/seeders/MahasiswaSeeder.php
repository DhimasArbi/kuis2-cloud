<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            //mahasiswa 1
            [
                'nim' => '1244716669',
                'nama' => 'Marcos Pagac',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '+13318071392',
                'email' => 'Marcos@hotmail.com',
                'tanggal_lahir' => '01-01-1999',
                'kelas_id' => 2,
            ],
            [
                'nim' => '1911960442',
                'nama' => 'Paula Hegmann',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '+16623097264',
                'email' => 'Paula@gmail.com',
                'tanggal_lahir' => '01-02-2000',
                'kelas_id' => 2,
            ],
            [
                'nim' => '2865274999',
                'nama' => 'Janis Hameell',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '+16056311774',
                'email' => 'Janis@gmail.com',
                'tanggal_lahir' => '11-05-2000',
                'kelas_id' => 2,
            ],
            [
                'nim' => '2942321120',
                'nama' => 'Korbin Braun',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '+18053092814',
                'email' => 'Korbin@yahoo.com',
                'tanggal_lahir' => '01-08-2000',
                'kelas_id' => 2,
            ],
            [
                'nim' => '2966349723',
                'nama' => 'Virginie Beer',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '+16072499789',
                'email' => 'Virginie@gmail.com',
                'tanggal_lahir' => '25-03-1999',
                'kelas_id' => 2,
            ],

            [
                'nim' => '3164438825',
                'nama' => 'Madalyn Prosacco',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '+14234016012',
                'email' => 'Madalyn@hotmail.com',
                'tanggal_lahir' => '01-03-1999',
                'kelas_id' => 2,
            ],
            [
                'nim' => '3467709898',
                'nama' => 'Burley Roob',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '+15208073403',
                'email' => 'Burley@hotmail.com',
                'tanggal_lahir' => '01-05-2000',
                'kelas_id' => 2,
            ],
            [
                'nim' => '4695008680',
                'nama' => 'Maverick Spencer',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '+17479377507',
                'email' => 'Maverick@hotmail.com',
                'tanggal_lahir' => '11-05-2000',
                'kelas_id' => 2,
            ],
            [
                'nim' => '4987462589',
                'nama' => 'Rigoberto Greenfelder',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '+14455402481',
                'email' => 'Rigoberto@yahoo.com',
                'tanggal_lahir' => '15-08-2000',
                'kelas_id' => 2,
            ],
            [
                'nim' => '5893685718',
                'nama' => 'Dandre Feeney',
                'jurusan' => 'Teknologi Informasi',
                'no_handphone' => '+18573333685',
                'email' => 'Dandre@hotmail.com',
                'tanggal_lahir' => '20-02-1999',
                'kelas_id' => 2,
            ],
        ];

        DB::table('mahasiswa')->insert($data);
    }
}
