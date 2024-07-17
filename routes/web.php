<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardLaporanController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.index');
});

// Login Controller
Route::name('auth.')->controller(LoginController::class)->group(function () {
    route::get('/login', 'index')->name('login');
    route::post('/login', 'check')->name('check');
});

#Register
Route::name('register.')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('index');
    Route::post('/register', [RegisterController::class, 'store'])->name('store');
});

// ganti password
Route::name('gantipass.')->group(function () {
    Route::get('/gantipasswdview', [LoginController::class, 'viewlupapasswd'])->name('viewlupapasswd');
    Route::post('/gantipasswd', [LoginController::class, 'gantipasswd'])->name('gantipasswd');
});

// Route admin
Route::middleware(['AdminRole'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

        Route::get('/data-user', [DashboardUserController::class, 'index'])->name('data-user.index');
        Route::get('/data-user/{id}', [DashboardUserController::class, 'edit'])->name('data-user.edit');
        Route::put('/data-user{id}', [DashboardUserController::class, 'update'])->name('data-user.update');

        Route::get('/data-laporan', [DashboardLaporanController::class, 'index'])->name('data-laporan');
        Route::post('/data-laporan', [DashboardLaporanController::class, 'download'])->name('data-laporan.download');
    });
});
Route::post('/dropdownprint', [LaporanController::class, 'pdf']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
