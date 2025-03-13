<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

// Menampilkan halaman registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Memproses data registrasi
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
