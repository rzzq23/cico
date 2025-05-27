<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    // Tampilkan form tambah income
    public function create()
    {
        return view('pages.add_income'); // pastikan view ini ada
    }

    // Simpan income baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'category' => 'required|string|max:50',
            'amount' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        Income::create([
            'user_id' => Auth::id(),
            'date' => $request->date,
            'category' => $request->category,
            'amount' => $request->amount,
            'description' => $request->description,
        ]);

        return redirect()->route('income.create')->with('success', 'Income added successfully!');
    }
}
