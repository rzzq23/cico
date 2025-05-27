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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('account_id'); // primary key
            $table->unsignedBigInteger('user_id'); // kolom user_id untuk relasi
            $table->decimal('total_balance', 15, 2);
            $table->decimal('total_expense', 15, 2);
            $table->decimal('total_income', 15, 2);
            $table->timestamps();

            // Membuat foreign key constraint ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
