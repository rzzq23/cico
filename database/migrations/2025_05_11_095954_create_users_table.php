<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string('name'); // Nama Panjang
            $table->string('email')->unique(); // Email
            $table->string('phone'); // Nomor Telepon
            $table->date('dob'); // Tanggal Lahir
            $table->string('password'); // Kata Sandi
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

