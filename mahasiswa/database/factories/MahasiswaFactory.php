<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $firstname = $this->faker->firstName;
        $lastname = $this->faker->lastName;
        return [
            'Nim' => random_int(1111111111,9999999999),
            'Nama' => $firstname.' '.$lastname,
            'Jurusan' => 'Teknologi Informasi',
            'No_Handphone' => $this->faker->e164phoneNumber ,
            'Email' => $firstname.'@'.$this->faker->freeEmailDomain,
            'Tanggal_lahir' => $this->faker->date($format = 'd-m-Y', $max = '2002'),
        ];
    }
}
