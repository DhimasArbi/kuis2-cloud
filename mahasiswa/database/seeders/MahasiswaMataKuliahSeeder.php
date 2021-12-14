<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMataKuliahSeeder extends Seeder
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
                'mahasiswa_id' => '1244716669',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '1244716669',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '1244716669',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '1244716669',
                'matakuliah_id' => 4,
                'nilai' => 'A',
            ],

            //mahasiswa 2
            [
                'mahasiswa_id' => '1911960442',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '1911960442',
                'matakuliah_id' => 2,
                'nilai' => 'B+',
            ],
            [
                'mahasiswa_id' => '1911960442',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '1911960442',
                'matakuliah_id' => 4,
                'nilai' => 'B+',
            ],

            //mahasiswa 3
            [
                'mahasiswa_id' => '2865274999',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2865274999',
                'matakuliah_id' => 2,
                'nilai' => 'B+',
            ],
            [
                'mahasiswa_id' => '2865274999',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2865274999',
                'matakuliah_id' => 4,
                'nilai' => 'A',
            ],

            //mahasiswa 4
            [
                'mahasiswa_id' => '2942321120',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2942321120',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2942321120',
                'matakuliah_id' => 3,
                'nilai' => 'B+',
            ],
            [
                'mahasiswa_id' => '2942321120',
                'matakuliah_id' => 4,
                'nilai' => 'A',
            ],

            //mahasiswa 5
            [
                'mahasiswa_id' => '2966349723',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2966349723',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2966349723',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '2966349723',
                'matakuliah_id' => 4,
                'nilai' => 'B+',
            ],

            //mahasiswa 6
            [
                'mahasiswa_id' => '3164438825',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '3164438825',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '3164438825',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '3164438825',
                'matakuliah_id' => 4,
                'nilai' => 'B+',
            ],

            //mahasiswa 7
            [
                'mahasiswa_id' => '3467709898',
                'matakuliah_id' => 1,
                'nilai' => 'B',
            ],
            [
                'mahasiswa_id' => '3467709898',
                'matakuliah_id' => 2,
                'nilai' => 'B',
            ],
            [
                'mahasiswa_id' => '3467709898',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '3467709898',
                'matakuliah_id' => 4,
                'nilai' => 'B+',
            ],

            //mahasiswa 8
            [
                'mahasiswa_id' => '4695008680',
                'matakuliah_id' => 1,
                'nilai' => 'C',
            ],
            [
                'mahasiswa_id' => '4695008680',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '4695008680',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '4695008680',
                'matakuliah_id' => 4,
                'nilai' => 'B+',
            ],

            //mahasiswa 9
            [
                'mahasiswa_id' => '4987462589',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '4987462589',
                'matakuliah_id' => 2,
                'nilai' => 'B',
            ],
            [
                'mahasiswa_id' => '4987462589',
                'matakuliah_id' => 3,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '4987462589',
                'matakuliah_id' => 4,
                'nilai' => 'B+',
            ],

            //mahasiswa 10
            [
                'mahasiswa_id' => '5893685718',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_id' => '5893685718',
                'matakuliah_id' => 2,
                'nilai' => 'B+',
            ],
            [
                'mahasiswa_id' => '5893685718',
                'matakuliah_id' => 3,
                'nilai' => 'B',
            ],
            [
                'mahasiswa_id' => '5893685718',
                'matakuliah_id' => 4,
                'nilai' => 'B+',
            ],
        ];

        DB::table('mahasiswa_matakuliah')->insert($data);
    }
}
