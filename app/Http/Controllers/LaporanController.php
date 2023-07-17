<?php

namespace App\Http\Controllers;

use App\DataTables\LaporanAlumniDataTable;
use App\DataTables\LaporanBeritaDataTable;
use App\DataTables\LaporanLowonganDataTable;
use App\DataTables\LaporanPerusahaanDataTable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Barryvdh\DomPDF\Facade\Pdf;
use App\DataTables\LaporanPetugasDataTable;
use App\Models\Berita;
use App\Models\Loker;

class LaporanController extends Controller
{
    public function dataPetugas(LaporanPetugasDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.laporan.petugas');
    }

    public function exportPetugas(LaporanPetugasDataTable $dataTable)
    {
        $data = $dataTable->query(new User())->get();

        $pdf = Pdf::loadView('admin.pages.laporan.pdf.petugas', ['data' => $data]);
        $pdfContent = $pdf->output();
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="Laporan-Petugas.pdf"',
            'Cache-Control' => 'public, max-age=60'
        ];

        return new Response($pdfContent, 200, $headers);
    }
    
    public function dataAlumni(LaporanAlumniDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.laporan.alumni');
    }

    public function exportAlumni(LaporanAlumniDataTable $dataTable)
    {
        $data = $dataTable->query(new User())->get();

        $pdf = Pdf::loadView('admin.pages.laporan.pdf.alumni', ['data' => $data])->setPaper('a4', 'landscape');
        $pdfContent = $pdf->output();
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="Laporan-Alumni.pdf"',
            'Cache-Control' => 'public, max-age=60'
        ];

        return new Response($pdfContent, 200, $headers);
    }
    
    public function dataPerusahaan(LaporanPerusahaanDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.laporan.perusahaan');
    }

    public function exportPerusahaan(LaporanPerusahaanDataTable $dataTable)
    {
        $data = $dataTable->query(new User())->get();

        $pdf = Pdf::loadView('admin.pages.laporan.pdf.perusahaan', ['data' => $data]);
        $pdfContent = $pdf->output();
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="Laporan-Perusahaan.pdf"',
            'Cache-Control' => 'public, max-age=60'
        ];

        return new Response($pdfContent, 200, $headers);
    }
    
    public function dataBerita(LaporanBeritaDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.laporan.berita');
    }

    public function exportBerita(LaporanBeritaDataTable $dataTable)
    {
        $data = $dataTable->query(new Berita())->get();

        $pdf = Pdf::loadView('admin.pages.laporan.pdf.berita', ['data' => $data]);
        $pdfContent = $pdf->output();
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="Laporan-Berita.pdf"',
            'Cache-Control' => 'public, max-age=60'
        ];

        return new Response($pdfContent, 200, $headers);
    }
    
    public function dataLowongan(LaporanLowonganDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.laporan.lowongan');
    }

    public function exportLowongan(LaporanLowonganDataTable $dataTable)
    {
        $data = $dataTable->query(new Loker())->get();

        $pdf = Pdf::loadView('admin.pages.laporan.pdf.lowongan', ['data' => $data])->setPaper('a4', 'landscape');
        $pdfContent = $pdf->output();
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="Laporan-Lowongan.pdf"',
            'Cache-Control' => 'public, max-age=60'
        ];

        return new Response($pdfContent, 200, $headers);
    }
}
