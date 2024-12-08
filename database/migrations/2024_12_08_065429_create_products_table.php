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
    Schema::create('products', function (Blueprint $table) {
        $table->id(); // Primary Key
        $table->string('name'); // Nama produk
        $table->text('description')->nullable(); // Deskripsi produk (opsional)
        $table->decimal('price', 10, 2); // Harga produk
        $table->integer('stock'); // Stok produk
        $table->timestamps(); // Created_at & Updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::dropIfExists('products');
}

};
