<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Loker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::factory()->count(3)->create();
        Loker::factory()->count(5)->create();
    }
}