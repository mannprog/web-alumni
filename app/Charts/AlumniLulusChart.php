<?php

namespace App\Charts;

use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class AlumniLulusChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $alumni = User::whereHas('roles', function ($query) {
            $query->where('name', 'alumni');
        })->get();
        // Menghitung jumlah alumni untuk setiap tahun kelulusan yang unik
        $alumniCounts = $alumni->groupBy('alumniAkademik.tahun_lulus')->map->count();

        // Mengisi data dan label dengan hasil perhitungan
        $data = $alumniCounts->values()->all();
        $labels = $alumniCounts->keys()->all();

        return $this->chart->barChart()
            ->addData('Jumlah Alumni', $data)
            ->setXAxis($labels);
    }
}
