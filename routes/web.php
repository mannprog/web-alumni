<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CivitasController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\VisitorController;
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
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('/berita', BeritaController::class);
    Route::resource('/perusahaan', CompanyController::class);
    Route::resource('/gtk', CivitasController::class);
    Route::resource('/pengunjung', VisitorController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

