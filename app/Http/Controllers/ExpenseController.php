<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    /**
     * Tampilkan form tambah pengeluaran
     */
    public function create()
    {
        return view('pages.add_expense');
    }

    /**
     * Simpan data pengeluaran ke database
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'date' => 'required|date',
            'category' => 'required|string',
            'amount' => 'required|numeric|min:0',
            'title' => 'required|string|max:255',
        ]);

        
        // Simpan ke database
        Expense::create([
            'user_id' => Auth::user()->id, // Pastikan user sudah login
            'date' => $request->date,
            'category' => $request->category,
            'amount' => $request->amount,
            'title' => $request->title,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('history')->with('success', 'Expense added successfully!');
        // return redirect()->back()->with('success', 'Expense added successfully!');
    }
}
