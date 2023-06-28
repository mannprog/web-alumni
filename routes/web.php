<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
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
    // Pengaturan User
    Route::resource('/petugas', PetugasController::class);
    Route::resource('/alumni', AlumniController::class);
    Route::resource('/perusahaan', CompanyController::class);


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profil/{id}', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/profil/{id}/edit', [DashboardController::class, 'editProfile'])->name('edit-profile');
    Route::put('/profil/{id}', [DashboardController::class, 'updateProfile'])->name('update-profile');
    Route::resource('/berita', NewsController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});