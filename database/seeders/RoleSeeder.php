<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'kepalasekolah']);
        Role::create(['name' => 'petugas']);
        Role::create(['name' => 'perusahaan']);
        Role::create(['name' => 'alumni']);
        Role::create(['name' => 'pengunjung']);
    }
}
