<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dosen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'nidn' => $this->faker->randomDigit,
            'alamat' => $this->faker->address,
            'kontak' => $this->faker->phoneNumber,
            'create_at' => now(),
            'update_at' => now(),
        ];
    }
}
