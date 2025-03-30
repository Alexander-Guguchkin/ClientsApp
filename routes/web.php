<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard.index');
Route::get('clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('clients', [ClientController::class, 'store'])->name('clients.store');
