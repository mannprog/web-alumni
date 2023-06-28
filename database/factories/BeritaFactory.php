<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $judul = fake('id_ID')->text(20);

        return [
            'user_id' => 3,
            'judul' => $judul,
            'slug' => $judul,
            'isi' => fake('id_ID')->text(500),
        ];
    }
}