<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveiTanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survei_tanahs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permohonan_tanah_id');
            $table->foreign('permohonan_tanah_id')->references('id')->on('permohonan_tanahs')->onDelete('restrict');
            $table->string('nama_petugas');
            $table->date('tanggal_survei');
            $table->string('surat_ukur');
            $table->string('gambar_denah');
            $table->string('luas_bidang');
            $table->string('lereng_permukaan');
            $table->string('kepekaan_erosi');
            $table->string('tingkat_erosi');
            $table->string('drainase');
            $table->string('kerikil');
            $table->string('ancaman_banjir');
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
        Schema::dropIfExists('survei_tanahs');
    }
}
