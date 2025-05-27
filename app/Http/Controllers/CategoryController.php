<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Income;
use App\Models\Expense;

class CategoryController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Hitung total income user
        $totalIncome = Income::where('user_id', $userId)->sum('amount');

        // Hitung total expense user
        $totalExpense = Expense::where('user_id', $userId)->sum('amount');

        // Hitung saldo akhir
        $totalBalance = $totalIncome - $totalExpense;
    
        return view('pages.category', compact('totalIncome', 'totalExpense', 'totalBalance'));
    }
}
