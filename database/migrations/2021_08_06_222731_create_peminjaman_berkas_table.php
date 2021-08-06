<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_berkas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permohonan_id');
            $table->foreign('permohonan_id')->references('id')->on('permohonans')->onDelete('restrict');
            // $table->unsignedBigInteger('rak_id')->nullable();
            // $table->foreign('rak_id')->references('id')->on('raks')->onDelete('restrict');
            $table->string('nama');
            $table->string('keperluan');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('peminjaman_berkas');
    }
}
