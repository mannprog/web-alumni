<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fake = fake('id_ID')->name();
        return [
            'name' => $fake,
            'username' => $fake,
            'email' => fake('id_ID')->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            if ($user->id == 1) {
                $user->assignrole('admin');
                $user->userKontak()->create([
                    'no_handphone' => fake('id_ID')->phoneNumber(),
                    'facebook' => fake('id_ID')->userName(),
                    'instagram' => fake('id_ID')->userName(),
                    'twitter' => fake('id_ID')->userName(),
                ]);
                $user->petugasDetail()->create([
                    'nip' => fake('id_ID')->randomNumber(),
                    'nuptk' => fake('id_ID')->randomNumber(),
                    'nik' => fake('id_ID')->randomNumber(),
                    'jenis_kelamin' => 'l',
                    'tempat_lahir' => fake('id_ID')->country(),
                    'tanggal_lahir' => fake('id_ID')->date(),
                    'alamat' => fake('id_ID')->address(),
                    'status' => 'nonpns',
                    'pendidikan_terakhir' => 's1',
                ]);
            } elseif ($user->id == 2) {
                $user->assignRole('kepalasekolah');
                $user->userKontak()->create([
                    'no_handphone' => fake('id_ID')->phoneNumber(),
                    'facebook' => fake('id_ID')->userName(),
                    'instagram' => fake('id_ID')->userName(),
                    'twitter' => fake('id_ID')->userName(),
                ]);
                $user->petugasDetail()->create([
                    'nip' => fake('id_ID')->randomNumber(),
                    'nuptk' => fake('id_ID')->randomNumber(),
                    'nik' => fake('id_ID')->randomNumber(),
                    'jenis_kelamin' => 'l',
                    'tempat_lahir' => fake('id_ID')->country(),
                    'tanggal_lahir' => fake('id_ID')->date(),
                    'alamat' => fake('id_ID')->address(),
                    'status' => 'pns',
                    'pendidikan_terakhir' => 's3',
                ]);
            } elseif ($user->id == 3) {
                $user->assignRole('petugas');
                $user->userKontak()->create([
                    'no_handphone' => fake('id_ID')->phoneNumber(),
                    'facebook' => fake('id_ID')->userName(),
                    'instagram' => fake('id_ID')->userName(),
                    'twitter' => fake('id_ID')->userName(),
                ]);
                $user->petugasDetail()->create([
                    'nip' => fake('id_ID')->randomNumber(),
                    'nuptk' => fake('id_ID')->randomNumber(),
                    'nik' => fake('id_ID')->randomNumber(),
                    'jenis_kelamin' => 'l',
                    'tempat_lahir' => fake('id_ID')->country(),
                    'tanggal_lahir' => fake('id_ID')->date(),
                    'alamat' => fake('id_ID')->address(),
                    'status' => 'nonpns',
                    'pendidikan_terakhir' => 'sma',
                ]);
            } elseif ($user->id == 4) {
                $user->assignRole('perusahaan');
                $user->userKontak()->create([
                    'no_handphone' => fake('id_ID')->phoneNumber(),
                    'facebook' => fake('id_ID')->userName(),
                    'instagram' => fake('id_ID')->userName(),
                    'twitter' => fake('id_ID')->userName(),
                ]);
                $user->perusahaanDetail()->create([
                    'jenis' => 'pt',
                    'alamat' => fake('id_ID')->address(),
                ]);
            } else {
                $user->assignRole('alumni');
                $user->userKontak()->create([
                    'no_handphone' => fake('id_ID')->phoneNumber(),
                    'facebook' => fake('id_ID')->userName(),
                    'instagram' => fake('id_ID')->userName(),
                    'twitter' => fake('id_ID')->userName(),
                ]);
                $user->alumniDetail()->create([
                    'nik' => fake('id_ID')->randomNumber(),
                    'jenis_kelamin' => 'l',
                    'alamat' => fake('id_ID')->address(),
                    'status' => 'tidakbekerja',
                    'pendidikan_terakhir' => 'sma',
                    'pendidikan_lain' => 'Yayasan Menjahit - Pelatihan Menjahit',
                ]);
                $user->alumniKeluarga()->create([
                    'ayah' => fake('id_ID')->name('male'),
                    'pekerjaan_ayah' => fake('id_ID')->jobTitle(),
                    'ibu' => fake('id_ID')->name('female'),
                    'pekerjaan_ibu' => fake('id_ID')->jobTitle(),
                    'alamat_ortu' => fake('id_ID')->address(),
                ]);
                $user->alumniAkademik()->create([
                    'nis' => fake('id_ID')->randomNumber(8),
                    'nisn' => fake('id_ID')->randomNumber(8),
                    'jurusan' => 'tkj',
                    'rombel' => '1',
                    'tahun_masuk' => '2020/2021',
                    'tahun_lulus' => '2022/2023',
                ]);
            }
        });
    }
}