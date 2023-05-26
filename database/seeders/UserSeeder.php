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
        $user = User::factory()->create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@admin.com',
            'password' => bcrypt('1234')
        ]);
        // $user->assignRole('superadmin');
        
        $user = User::factory()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234')
        ]);
        // $user->assignRole('admin');
        
        $user = User::factory()->create([
            'name' => 'Kepala Sekolah',
            'username' => 'kepalasekolah',
            'email' => 'kepalasekolah@admin.com',
            'password' => bcrypt('1234')
        ]);
        // $user->assignRole('kepalasekolah');
        
        $user = User::factory()->create([
            'name' => 'Petugas',
            'username' => 'petugas',
            'email' => 'petugas@admin.com',
            'password' => bcrypt('1234')
        ]);
        // $user->assignRole('petugas');
        
        $user = User::factory()->create([
            'name' => 'Perusahaan',
            'username' => 'perusahaan',
            'email' => 'perusahaan@user.com',
            'password' => bcrypt('1234')
        ]);
        // $user->assignRole('perusahaan');
        
        $user = User::factory()->create([
            'name' => 'Alumni',
            'username' => 'alumni',
            'email' => 'alumni@user.com',
            'password' => bcrypt('1234')
        ]);
        // $user->assignRole('alumni');

        $user = User::factory()->create([
            'name' => 'Pengunjung',
            'username' => 'pengunjung',
            'email' => 'pengunjung@user.com',
            'password' => bcrypt('1234')
        ]);
        // $user->assignRole('pengunjung');
    }
}
