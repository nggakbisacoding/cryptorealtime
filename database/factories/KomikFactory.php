<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crypto>
 */
class KomikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->randomNumber(),
            'nama_komik' => $this->faker->name,
            'author_komik' => "Oda",
            'img_komik' => Str::random(8) . '.jpg',
            'harga' => $this->faker->randomNumber(),
            'desc_komik' => Str::random(10),
            'date_komik' => $this->faker->date(),
        ];
    }
}
