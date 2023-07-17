<?php

namespace App\Charts;

use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class AlumniJurusanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $alumni = User::whereHas('roles', function ($query) {
            $query->where('name', 'alumni');
        })->get();
        $data = [
            $alumni->where('alumniAkademik.jurusan', 'tkj')->count(),
            $alumni->where('alumniAkademik.jurusan', 'rpl')->count(),
        ];
        $label = [
            'Teknik Komputerisasi Jaringan',
            'Rekayasa Perangkat Lunak',
        ];
        return $this->chart->pieChart()
            ->addData($data)
            ->setLabels($label);
    }
}
