<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CurriculaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VacancyController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* ========================================
   = Auth =
========================================= */
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');

/* ========================================
   = Sitio Publico =
========================================= */
Route::get('/', [HomeController::class, 'index'])->name('home');

/* ========================================
   = Vacantes =
========================================= */
Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacancies.index');

/* ========================================
   = Curriculums =
========================================= */
Route::get('/curricula', [CurriculaController::class, 'index'])->name('curricula.index');

/* ========================================
   = Dashboard =
========================================= */
