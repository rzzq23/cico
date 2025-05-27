<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\HistoryManageController;

// ====================
// Halaman Umum
// ====================

Route::get('/', function () {
    return view('welcome');
});

// ====================
// Auth: Login & Register
// ====================

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// Logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

// ====================
// Halaman dengan Auth
// ====================

Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Halaman tambahan
    Route::get('/history', [HistoryController::class, 'index'])->name('history');
    Route::get('/statistik', [StatistikController::class, 'index'])->name('statistik');
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    // Route::view('/statistik', 'pages.statistik')->name('statistik');
    // Route::view('/category', 'pages.category')->name('category');
    Route::get('/history-manage', [HistoryManageController::class, 'index'])->name('history_manage');
    Route::view('/notification', 'pages.notification')->name('notification');
    Route::view('/profile', 'pages.profile')->name('profile');

    // // Rute untuk halaman tambah income
    // Route::get('/add-income', function () {
    //     return view('pages.add_income'); // Pastikan view ini ada
    // })->name('income.create');

    // // Rute untuk halaman tambah expense
    // Route::get('/add-expense', [ExpenseController::class, 'create'])->name('expense.create');

    // // Rute untuk menyimpan data income dan expense
    // Route::post('/income/store', [IncomeController::class, 'store'])->name('income.store');
    // Route::post('/expense/store', [ExpenseController::class, 'store'])->name('expense.store');

    // Rute untuk halaman tambah income (gunakan controller)
    Route::get('/add-income', [IncomeController::class, 'create'])->name('income.create');

    // Rute untuk halaman tambah expense
    Route::get('/add-expense', [ExpenseController::class, 'create'])->name('expense.create');

    // Rute untuk menyimpan data income dan expense
    Route::post('/income/store', [IncomeController::class, 'store'])->name('income.store');
    Route::post('/expense/store', [ExpenseController::class, 'store'])->name('expense.store');

    // Edit Profil
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::view('/profile', 'pages.profile')->name('profile');

    // History Manage
    // Route::get('history-manage/{type}/{id}', [HistoryManageController::class, 'edit'])->name('history.manage.edit');
    // Route::put('history-manage/update/{type}/{id}', [HistoryManageController::class, 'update'])->name('history.manage.update');
    // Route::delete('history-manage/delete/{type}/{id}', [HistoryManageController::class, 'destroy'])->name('history.manage.destroy');
});
