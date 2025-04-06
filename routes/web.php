<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/show/{client}', [ClientController::class, 'show'])->name('clients.show');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/edit/{clients}', [ClientController::class, 'edit'])->name('clients.edit');
Route::patch('/clients/{clients}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{clients}', [ClientController::class, 'destroy'])->name('clients.destroy');
