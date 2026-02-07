<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group.
|
*/

// Guest routes (login)
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('users', [DashboardController::class, 'users'])->name('users');
    Route::get('users/{id}', [DashboardController::class, 'showUser'])->name('users.show');
    Route::delete('users/{id}', [DashboardController::class, 'deleteUser'])->name('users.delete');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
