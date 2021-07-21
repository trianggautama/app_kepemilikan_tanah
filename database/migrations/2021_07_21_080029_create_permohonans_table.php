<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_bangunan_id');
            $table->foreign('jenis_bangunan_id')->references('id')->on('jenis_bangunans')->onDelete('restrict');
            $table->unsignedBigInteger('kelurahan_id');
            $table->foreign('kelurahan_id')->references('id')->on('kelurahans')->onDelete('restrict');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('no_fisik');
            $table->string('no_yuridis');
            $table->string('nib');
            $table->string('letak_tanah');
            $table->string('dikuasai_awal');
            $table->string('tahun');
            $table->string('dengan_dasar');
            $table->string('no_register');
            $table->date('tanggal_register');
            $table->string('luas_tanah');
            $table->string('surat_kuasa')->nullable();
            $table->string('ktp')->nullable();
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
        Schema::dropIfExists('permohonans');
    }
}