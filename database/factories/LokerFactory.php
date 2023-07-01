<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loker>
 */
class LokerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 4,
            'kategori_id' => mt_rand(1, 3),
            'nama' => $this->faker->jobTitle(),
            'slug' => $this->faker->slug(),
            'lokasi' => $this->faker->streetAddress(),
            'isi' => $this->faker->paragraph(),
            'tanggal_mulai' => $this->faker->dateTimeBetween('today', 'today')->format('Y-m-d'),
            'tanggal_akhir' => $this->faker->dateTimeBetween('+7 day', '+7 day')->format('Y-m-d'),
        ];
    }
}