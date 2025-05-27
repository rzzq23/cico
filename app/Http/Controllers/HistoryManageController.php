<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Income;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HistoryManageController extends Controller
{
    // Pastikan user harus login sebelum akses controller ini
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userId = Auth::id();

        // Hitung total income dan expense user
        $totalIncome = Income::where('user_id', $userId)->sum('amount');
        $totalExpense = Expense::where('user_id', $userId)->sum('amount');
        $totalBalance = $totalIncome - $totalExpense;

        // Ambil dan siapkan data income, tambahkan id
        $incomes = Income::where('user_id', $userId)->get()->map(function ($item) {
            return [
                'id' => $item->id, // tambahkan ini
                'title' => $item->title,
                'amount' => $item->amount,
                'category' => $item->category,
                'date' => $item->created_at,
                'type' => 'income',
            ];
        });

        // Ambil dan siapkan data expense, tambahkan id
        $expenses = Expense::where('user_id', $userId)->get()->map(function ($item) {
            return [
                'id' => $item->id, // tambahkan ini
                'title' => $item->title,
                'amount' => $item->amount,
                'category' => $item->category,
                'date' => $item->created_at,
                'type' => 'expense',
            ];
        });

        // Gabungkan dan urutkan transaksi berdasarkan tanggal terbaru
        $transactions = $incomes->merge($expenses)->sortByDesc('date');

        // Kelompokkan transaksi berdasarkan bulan (nama bulan)
        $grouped = $transactions->groupBy(function ($item) {
            return Carbon::parse($item['date'])->format('F Y');
        });

        // Kirim semua data ke view
        return view('pages.history_manage', compact(
            'totalIncome',
            'totalExpense',
            'totalBalance',
            'grouped'
        ));
    }

    public function edit($type, $id)
    {
        $model = $type === 'income' ? Income::class : Expense::class;
        $transaction = $model::findOrFail($id);
    
        return view('pages.transaction_edit', [
            'transaction' => $transaction,
            'type' => $type,
        ]);
    }
    
    public function update(Request $request, $type, $id)
    {
        $model = $type === 'income' ? Income::class : Expense::class;
        $transaction = $model::findOrFail($id);
    
        $transaction->update($request->validate([
            'title' => 'required|string',
            'amount' => 'required|numeric',
            'category' => 'required|string',
        ]));
    
        return redirect()->route('history.index')->with('success', 'Transaksi berhasil diperbarui.');
    }
    
    public function destroy($type, $id)
    {
        $model = $type === 'income' ? Income::class : Expense::class;
        $transaction = $model::findOrFail($id);
        $transaction->delete();
    
        return redirect()->route('history.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
