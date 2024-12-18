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
        // Mengecek apakah tabel 'products' sudah ada
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id(); // Secara default, ini adalah unsignedBigInteger
                $table->string('nama_produk');
                $table->decimal('harga_produk', 10, 2);
                $table->integer('stok_produk');
                $table->timestamps();

                // Menentukan engine yang digunakan
                $table->engine = 'InnoDB';
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop tabel hanya jika ada
        if (Schema::hasTable('products')) {
            Schema::dropIfExists('products');
        }
    }
};
