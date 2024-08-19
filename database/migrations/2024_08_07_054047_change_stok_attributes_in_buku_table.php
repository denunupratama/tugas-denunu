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
        Schema::table('buku', function (Blueprint $table) {
            // Ubah panjang kolom 'stok' menjadi 5 karakter
            $table->string('stok', 5)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buku', function (Blueprint $table) {
            // Kembalikan panjang kolom 'stok' menjadi 15 karakter
            $table->string('stok', 15)->nullable()->change();
        });
    }
};
