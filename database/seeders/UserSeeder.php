<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->count(4)->sequence(
        //     [
        //         'name' => 'Admin',
        //         'username' => 'admin',
        //         'email' => 'admin@admin.com',
        //         'password' => bcrypt('1234'),
        //         'is_admin' => 0,
        //     ],
        //     [
        //         'name' => 'Kepala Sekolah',
        //         'username' => 'kepalasekolah',
        //         'email' => 'kepalasekolah@admin.com',
        //         'password' => bcrypt('1234')
        //     ],
        //     [
        //         'name' => 'Petugas',
        //         'username' => 'petugas',
        //         'email' => 'petugas@admin.com',
        //         'password' => bcrypt('1234'),
        //         'is_admin' => 0,
        //     ],
        //     [
        //         'name' => 'Perusahaan',
        //         'username' => 'perusahaan',
        //         'email' => 'perusahaan@user.com',
        //         'password' => bcrypt('1234'),
        //         'is_admin' => 0,
        //     ],
        // );

        User::factory()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234'),
            'is_admin' => 0,
        ]);

        User::factory()->create([
            'name' => 'Kepala Sekolah',
            'username' => 'kepalasekolah',
            'email' => 'kepalasekolah@admin.com',
            'password' => bcrypt('1234'),
            'is_admin' => 0,
        ]);

        User::factory()->create([
            'name' => 'Petugas',
            'username' => 'petugas',
            'email' => 'petugas@admin.com',
            'password' => bcrypt('1234'),
            'is_admin' => 0,
        ]);

        User::factory()->create([
            'name' => 'Perusahaan',
            'username' => 'perusahaan',
            'email' => 'perusahaan@user.com',
            'password' => bcrypt('1234'),
            'is_admin' => 0,
        ]);

        User::factory()->count(5)->create();

        // $user = User::factory()->create([
        //     'name' => 'Alumni',
        //     'username' => 'alumni',
        //     'email' => 'alumni@user.com',
        //     'password' => bcrypt('1234')
        // ]);
        // $user->assignRole('alumni');
    }
}