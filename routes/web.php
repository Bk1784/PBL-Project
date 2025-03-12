<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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