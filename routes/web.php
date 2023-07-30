<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AbsensController;
use App\Http\Controllers\DashboardController;

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
});

Route::Post('/logoutAction',[AuthController::class,'logoutAction'])->name('logout.action');

