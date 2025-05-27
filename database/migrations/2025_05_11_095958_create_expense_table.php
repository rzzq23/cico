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
    // Schema::create('expenses', function (Blueprint $table) {
    //     $table->id('expense_id');
    //     $table->date('date');
    //     $table->string('category', 50);
    //     $table->decimal('amount', 15, 2);
    //     $table->text('description');
    //     $table->timestamps(); // optional
    // });
    Schema::create('expenses', function (Blueprint $table) {
        $table->id(); // ini buat kolom id auto increment primary key
        $table->unsignedBigInteger('user_id');
        $table->date('date');
        $table->string('category');
        $table->decimal('amount', 15, 2);
        $table->string('title');
        $table->timestamps();
    
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });    
    
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
