<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Income;
use App\Models\Expense;
use Illuminate\Support\Carbon;

class HistoryController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Hitung total income dan expense user
        $totalIncome = Income::where('user_id', $userId)->sum('amount');
        $totalExpense = Expense::where('user_id', $userId)->sum('amount');
        $totalBalance = $totalIncome - $totalExpense;

        // Ambil dan siapkan data income
        $incomes = Income::where('user_id', $userId)->get()->map(function ($item) {
            return [
                'title' => $item->title,
                'amount' => $item->amount,
                'category' => $item->category,
                'date' => $item->created_at,
                'type' => 'income',
            ];
        });

        // Ambil dan siapkan data expense
        $expenses = Expense::where('user_id', $userId)->get()->map(function ($item) {
            return [
                'title' => $item->title,
                'amount' => $item->amount,
                'category' => $item->category,
                'date' => $item->created_at,
                'type' => 'expense',
            ];
        });

        // Gabungkan dan urutkan transaksi berdasarkan tanggal terbaru
        $transactions = $incomes->merge($expenses)->sortByDesc('date');

        // Kelompokkan transaksi berdasarkan bulan
        $grouped = $transactions->groupBy(function ($item) {
            return Carbon::parse($item['date'])->format('F');
        });

        // Kirim semua data ke view
        return view('pages.history', compact(
            'totalIncome',
            'totalExpense',
            'totalBalance',
            'grouped'
        ));
    }
}
