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
        Schema::create('buku', function (Blueprint $table) {
            $table->integer('id_buku')->primary();
            $table->string('judul_buku')->nullable();
            $table->string('anak_judul')->nullable();
            $table->string('pengarang')->nullable();
            $table->string('penulis')->nullable();
            $table->string('ilustrator')->nullable();
            $table->string('editor')->nullable();
            $table->string('isbn')->nullable();
            $table->string('penerbit')->nullable();
            $table->integer('tahun_terbit')->nullable();
            $table->string('kota_terbit')->nullable();
            $table->string('jenis_buku')->nullable();
            $table->integer('rak_buku')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};