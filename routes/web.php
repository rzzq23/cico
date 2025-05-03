<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

// Halaman awal (umum)
Route::get('/', function () {
    return view('welcome');
});

// Auth: Login & Register
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman yang butuh login
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::view('/history', 'pages.history')->name('history');
    Route::view('/statistik', 'pages.statistik')->name('statistik');
    Route::view('/notification', 'pages.notification')->name('notification');
    Route::view('/category', 'pages.category')->name('category');
    Route::view('/profile', 'pages.profile')->name('profile');
});


