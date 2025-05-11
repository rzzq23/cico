<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTable extends Migration
{
    public function up(): void
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->id('notification_id');
            $table->text('description');
            // $table->date('date')->default(DB::raw('CURRENT_DATE')); 
            // $table->time('time')->default(DB::raw('CURRENT_TIME'));  
            $table->timestamps(); // opsional, hapus jika tidak dipakai
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notification');
    }
}
