<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('account', function (Blueprint $table) {
        $table->id('account_id');
        $table->decimal('total_balance', 15, 2);
        $table->decimal('total_expense', 15, 2);
        $table->timestamps(); // optional, bisa dihapus jika tidak dipakai
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account');
    }
};
