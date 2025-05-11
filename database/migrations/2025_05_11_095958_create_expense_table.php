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
    Schema::create('expense', function (Blueprint $table) {
        $table->id('expense_id');
        $table->date('date');
        $table->string('category', 50);
        $table->decimal('amount', 15, 2);
        $table->text('description');
        $table->timestamps(); // optional
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expense');
    }
};
