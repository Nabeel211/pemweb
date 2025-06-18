<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('peminjaman', function (Blueprint $table) {
        $table->id();
        $table->string('judul_buku');
        $table->date('tanggal_pinjam');
        $table->date('tanggal_kembali');
        $table->string('nama_peminjam');
        $table->string('id_peminjam');
        $table->string('status')->default('Dipinjam');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
