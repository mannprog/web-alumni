<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardAlumniController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeneralAdminController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/berita', [HomepageController::class, 'allBerita'])->name('all-berita');
Route::get('/berita/{slug}', [HomepageController::class, 'detailBerita'])->name('detail-berita');
Route::get('/lowongan', [HomepageController::class, 'allLowongan'])->name('all-lowongan');
Route::get('/lowongan/{slug}', [HomepageController::class, 'detailLowongan'])->name('detail-lowongan');
Route::get('/alumni', [HomepageController::class, 'allAlumni'])->name('all-alumni');
Route::get('/alumni/{username}', [HomepageController::class, 'detailAlumni'])->name('detail-alumni');

Route::get('/login', function () {
    return view('auth.login');
})->name('auth')->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {

    Route::group(['middleware' => ['role:admin|kepalasekolah|petugas|perusahaan']], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profil/{id}', [DashboardController::class, 'profile'])->name('profile');
        Route::get('/profil/{id}/edit', [DashboardController::class, 'editProfile'])->name('edit-profile');
        Route::put('/profil/{id}', [DashboardController::class, 'updateProfile'])->name('update-profile');
    });

    Route::group(['middleware' => ['role:admin|kepalasekolah|petugas']], function () {
        Route::resource('/dashboard/berita', BeritaController::class);
        Route::get('/dashboard/lowongan', [GeneralAdminController::class, 'allLowongan'])->name('lowongan.index');
        Route::get('/dashboard/lowongan/{lowongan}', [GeneralAdminController::class, 'detailLowongan'])->name('lowongan.detail');

        // Pengaturan
        Route::resource('/dashboard/setting/kategori', KategoriController::class);
        Route::resource('/dashboard/setting/petugas', PetugasController::class);
        Route::resource('/dashboard/setting/alumni', AlumniController::class);
        Route::resource('/dashboard/setting/perusahaan', PerusahaanController::class);
    });

    Route::group(['middleware' => ['role:perusahaan']], function () {
        Route::resource('/dashboard/loker', LokerController::class);
        Route::post('/dashboard/lamaran/{id}/accept', [LokerController::class, 'acceptLamaran'])->name('lamaran.accept');
        Route::post('/dashboard/lamaran/{id}/reject', [LokerController::class, 'rejectLamaran'])->name('lamaran.reject');

        Route::get('/dashboard/alumni', [GeneralAdminController::class, 'allAlumni'])->name('allAlumni.index');
        Route::get('/dashboard/alumni/{alumni}', [GeneralAdminController::class, 'detailAlumni'])->name('allAlumni.detail');
    });

    Route::group(['middleware' => ['role:alumni']], function () {
        Route::get('/dashboard-alumni', [DashboardAlumniController::class, 'index'])->name('dashboard-alumni');
        Route::get('/dashboard-alumni/profil/{id}', [DashboardAlumniController::class, 'profile'])->name('profile-alumni');
        Route::get('/dashboard-alumni/profil/{id}/edit', [DashboardAlumniController::class, 'editProfile'])->name('editProfile-alumni');
        Route::put('/dashboard-alumni/profil/{id}', [DashboardAlumniController::class, 'updateProfile'])->name('updateProfile-alumni');
        // Route::resource('/dashboard-alumni/profil', DashboardAlumniController::class);

        Route::get('/dashboard-alumni/lowongan', [GeneralAdminController::class, 'allLowonganAlumni'])->name('lowongan-alumni.index');
        Route::get('/dashboard-alumni/lowongan/{lowongan}', [GeneralAdminController::class, 'detailLowonganAlumni'])->name('lowongan-alumni.detail');
        Route::post('/dashboard-alumni/lowongan', [GeneralAdminController::class, 'kirimLamaran'])->name('kirim-lamaran');

        Route::get('/dashboard-alumni/alumni', [GeneralAdminController::class, 'alumnus'])->name('alumnus.index');
        Route::get('/dashboard-alumni/alumni/{alumni}', [GeneralAdminController::class, 'detailAlumnus'])->name('alumnus.detail');

        Route::get('/dashboard-alumni/lamaran', [GeneralAdminController::class, 'lamaran'])->name('lamaran.index');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});