<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AbsensController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\TahunAjaranController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/',[AuthController::class, 'index'])->name('login');
    Route::get('/forgot',[AuthController::class, 'forgot'])->name('forgot');
    Route::Post('/loginAction',[AuthController::class,'loginAction'])->name('login.action');
    Route::Post('/forgotAction',[AuthController::class,'forgotAction'])->name('forgot.action');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/absensi',[AbsensController::class,'index'])->name('absensi');
    Route::Post('/logoutAction',[AuthController::class,'logoutAction'])->name('logout.action');


    Route::controller(KelasController::class)->group(function () {
        Route::get('/kelas', 'index')->name('kelas');
        Route::post('/kelas/save', 'save')->name('kelas.save.action');
        Route::post('/kelas/update', 'update')->name('kelas.update.action');
        Route::post('/kelas/delete', 'delete')->name('kelas.delete.action');
    });

    Route::controller(TahunAjaranController::class)->group(function () {
        Route::get('/tahunAjaran', 'index')->name('tahun.ajaran');
        Route::post('/tahunAjaran/save', 'save')->name('tahun.ajaran.save.action');
        Route::post('/tahunAjaran/update', 'update')->name('tahun.ajaran.update.action');
        Route::post('/tahunAjaran/delete', 'delete')->name('tahun.ajaran.delete.action');
    });

    Route::controller(JurusanController::class)->group(function () {
        Route::get('/jurusan', 'index')->name('jurusan');
        Route::post('/jurusan/save', 'save')->name('jurusan.save.action');
        Route::post('/jurusan/update', 'update')->name('jurusan.update.action');
        Route::post('/jurusan/delete', 'delete')->name('jurusan.delete.action');
    });

    Route::controller(PelajaranController::class)->group(function () {
        Route::get('/pelajaran', 'index')->name('pelajaran');
        Route::post('/pelajaran/save', 'save')->name('pelajaran.save.action');
        Route::post('/pelajaran/update', 'update')->name('pelajaran.update.action');
        Route::post('/pelajaran/delete', 'delete')->name('pelajaran.delete.action');
    });

    Route::controller(ConfigController::class)->group(function () {
        Route::get('/config', 'index')->name('config');
        Route::post('/config/update', 'update')->name('config.update.action');
    });
});



