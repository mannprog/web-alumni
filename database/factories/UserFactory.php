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
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
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
                $user->assignrole('superadmin');
                $user->civitas_detail()->create([
                    'nip' => fake('id_ID')->randomNumber(),
                    'nuptk' => fake('id_ID')->randomNumber(),
                    'nik' => fake('id_ID')->randomNumber(),
                    'jk' => 'l',
                    'tempat_lahir' => 'Sumedang',
                    'tanggal_lahir' => fake('id_ID')->date(),
                    'no_handphone' => fake('id_ID')->phoneNumber(),
                    'status' => 'nonpns',
                    'alamat' => fake('id_ID')->address(),
                ]);
            } elseif ($user->id == 2) {
                $user->assignRole('admin');
                $user->civitas_detail()->create([
                    'nip' => fake('id_ID')->randomNumber(),
                    'nuptk' => fake('id_ID')->randomNumber(),
                    'nik' => fake('id_ID')->randomNumber(),
                    'jk' => 'l',
                    'tempat_lahir' => 'Sumedang',
                    'tanggal_lahir' => fake('id_ID')->date(),
                    'no_handphone' => fake('id_ID')->phoneNumber(),
                    'status' => 'nonpns',
                    'alamat' => fake('id_ID')->address(),
                ]);
            } elseif ($user->id == 3) {
                $user->assignRole('kepalasekolah');
                $user->civitas_detail()->create([
                    'nip' => fake('id_ID')->randomNumber(),
                    'nuptk' => fake('id_ID')->randomNumber(),
                    'nik' => fake('id_ID')->randomNumber(),
                    'jk' => 'l',
                    'tempat_lahir' => 'Sumedang',
                    'tanggal_lahir' => fake('id_ID')->date(),
                    'no_handphone' => fake('id_ID')->phoneNumber(),
                    'status' => 'pns',
                    'alamat' => fake('id_ID')->address(),
                ]);
            } elseif ($user->id == 4) {
                $user->assignRole('petugas');
                $user->civitas_detail()->create([
                    'nip' => fake('id_ID')->randomNumber(),
                    'nuptk' => fake('id_ID')->randomNumber(),
                    'nik' => fake('id_ID')->randomNumber(),
                    'jk' => 'p',
                    'tempat_lahir' => 'Sumedang',
                    'tanggal_lahir' => fake('id_ID')->date(),
                    'no_handphone' => fake('id_ID')->phoneNumber(),
                    'status' => 'nonpns',
                    'alamat' => fake('id_ID')->address(),
                ]);
            } elseif ($user->id == 5) {
                $user->assignRole('perusahaan');
                $user->company_detail()->create([
                    'jenis_perusahaan' => 'pt',
                    'alamat_perusahaan' => fake('id_ID')->address(),
                    'no_perusahaan' => fake('id_ID')->phoneNumber(),
                ]);
            } elseif ($user->id == 6) {
                $user->assignRole('alumni');
                $user->alumni_detail()->create([
                    'nis' => fake('id_ID')->randomNumber(8),
                    'nisn' => fake('id_ID')->randomNumber(8),
                    'jk' => 'p',
                    'alamat' => fake('id_ID')->address(),
                    'status' => 'tidakbekerja',
                ]);
                $user->alumni_family()->create([
                    'ayah' => fake('id_ID')->name(),
                    'pekerjaan_ayah' => fake('id_ID')->jobTitle(),
                    'ibu' => fake('id_ID')->name(),
                    'pekerjaan_ibu' => fake('id_ID')->jobTitle(),
                ]);
                $user->alumni_academic()->create([
                    'jurusan' => 'tkj',
                    'rombel' => '1',
                    'tahun_masuk' => '2020/2021',
                    'tahun_lulus' => '2022/2023',
                ]);
            } else {
                $user->assignRole('pengunjung');
            }
        });
    }
}
