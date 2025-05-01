<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Bisa ditambahkan logika lain di sini, misalnya data pengguna, statistik, dll
        return view('dashboard.index'); // Sesuaikan dengan nama view dashboard yang telah kamu buat
    }
}
