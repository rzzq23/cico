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
        Schema::create('income', function (Blueprint $table) {
            $table->id('income_id');
            $table->unsignedBigInteger('user_id'); // kolom user_id untuk relasi
            $table->date('date');
            $table->string('category', 50);
            $table->decimal('amount', 15, 2);
            $table->text('description');
            $table->timestamps();

            // Foreign key constraint ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income');
    }
};

