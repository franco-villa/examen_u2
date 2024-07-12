<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('alumnos', [AlumnosController::class, 'index'])->name('alumnos.index');
Route::get('alumnos/crear', [AlumnosController::class, 'create'])->name('alumnos.create');
Route::post('alumnos/store', [AlumnosController::class, 'store'])->name('alumnos.store');

Route::get('alumnos/{id}', [AlumnosController::class, 'show'])->name('alumnos.show');

