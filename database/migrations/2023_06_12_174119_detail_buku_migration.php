<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_buku', function (Blueprint $table) {
            $table->id('id_detail_buku');
            

            $table->integer('id_buku')->nullable();
            $table->foreign('id_buku')->references('id_buku')->on('buku')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('nomor_panggil')->nullable();
            $table->string('edisi_cetakan')->nullable();
            $table->integer('tahun_pengadaan')->nullable();
            $table->text('deskripsi_fisik')->nullable();
            $table->string('bahasa')->nullable();
            $table->integer('jumlah_buku')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('alamat_website')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_buku');
    }
};