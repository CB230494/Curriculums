<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('cvs', CVController::class); // Rutas CRUD para currículums
});



Route::middleware(['auth'])->group(function () {
    Route::get('/reportes', function () {
        return view('reportes'); // Asegúrate de tener un archivo de vista llamado reportes.blade.php
    })->name('reportes');
});



Route::middleware(['auth'])->group(function () {
    Route::resource('cvs', CVController::class); // Rutas CRUD
});
Route::resource('cvs', \App\Http\Controllers\CVController::class);




// Ruta para mostrar el formulario de edición
Route::get('/cvs/{cv}/edit', [CVController::class, 'edit'])->name('cvs.edit');

// Ruta para actualizar el currículum
Route::put('/cvs/{id}', [CVController::class, 'update'])->name('cvs.update');


Route::resource('cvs', CVController::class);



Route::get('/cvs/{id}/download', [CVController::class, 'download'])->name('cvs.download');

