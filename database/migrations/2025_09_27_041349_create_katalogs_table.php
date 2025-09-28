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
    Schema::create('katalogs', function (Blueprint $table) {
        $table->id();
        $table->string('nama_paket');
        $table->decimal('harga', 12, 2);
        $table->text('deskripsi')->nullable();
        $table->string('gambar')->nullable(); // untuk simpan path file gambar
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalogs');
    }
};
