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
        return [
            'nama' => $this->faker->name,
            'nim' => $this->faker->randomDigit,
            'tanggal_lahir' => $this->faker->dateTime('now')->format('Y-m-d'),
            'alamat' => $this->faker->address,
            'tahun_masuk' => $this->faker->year('now'),
            'create_at' => now(),
            'update_at' => now(),
        ];
    }
}
