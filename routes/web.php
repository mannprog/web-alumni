<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardAlumniController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('home.welcome');
})->name('homepage');

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

        Route::group(['middleware' => ['role:perusahaan']], function () {
            Route::resource('/dashboard/loker', LokerController::class);
            Route::post('/dashboard/lamaran/{id}/accept', [LokerController::class, 'acceptLamaran'])->name('lamaran.accept');
            Route::post('/dashboard/lamaran/{id}/reject', [LokerController::class, 'rejectLamaran'])->name('lamaran.reject');
        });

        Route::group(['middleware' => ['role:admin|kepalasekolah|petugas']], function () {
            Route::resource('/dashboard/berita', BeritaController::class);

            // Pengaturan
            Route::resource('/dashboard/kategori', KategoriController::class);
            Route::resource('/dashboard/petugas', PetugasController::class);
            Route::resource('/dashboard/alumni', AlumniController::class);
            Route::resource('/dashboard/perusahaan', PerusahaanController::class);
        });
    });

    Route::group(['middleware' => ['role:alumni']], function () {
        Route::get('/dashboard-alumni', [DashboardAlumniController::class, 'index'])->name('dashboard-alumni');
        Route::get('/dashboard-alumni/profil/{id}', [DashboardAlumniController::class, 'profile'])->name('profile-alumni');
        Route::get('/dashboard-alumni/profil/{id}/edit', [DashboardAlumniController::class, 'editProfile'])->name('editProfile-alumni');
        Route::put('/dashboard-alumni/profil/{id}', [DashboardAlumniController::class, 'updateProfile'])->name('updateProfile-alumni');
        // Route::resource('/dashboard-alumni/profil', DashboardAlumniController::class);
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});