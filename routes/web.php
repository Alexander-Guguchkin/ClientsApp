<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/clients/show/{client}', [ClientController::class, 'show'])->name('clients.show');
    Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/clients/edit/{clients}', [ClientController::class, 'edit'])->name('clients.edit');
    Route::patch('/clients/{clients}', [ClientController::class, 'update'])->name('clients.update');
    Route::delete('/clients/{clients}', [ClientController::class, 'destroy'])->name('clients.destroy');
    Route::resource('users', UserController::class);
});

