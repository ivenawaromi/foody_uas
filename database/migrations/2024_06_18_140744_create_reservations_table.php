<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->string('order_id', 5)->primary(); // Menggunakan string dengan panjang 5 karakter sebagai kunci utama
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->date('resev_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};