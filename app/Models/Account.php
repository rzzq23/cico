<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory;

    // Tentukan primary key yang digunakan
    protected $primaryKey = 'account_id'; // Sesuai dengan migrasi kamu

    // Primary key adalah auto-increment bertipe integer
    public $incrementing = true;
    protected $keyType = 'int';

    // Kolom yang boleh diisi
    protected $fillable = [
        'user_id',
        'total_balance',
        'total_expense',
    ];

    /**
     * Relasi ke model User
     * Setiap account dimiliki oleh satu user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
