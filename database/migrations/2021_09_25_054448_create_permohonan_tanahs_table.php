<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanTanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_tanahs', function (Blueprint $table) {
            $table->id();
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
            $table->string('kk')->nullable();
            $table->string('ktp')->nullable();
            $table->string('skt')->nullable();
            $table->string('segel_tanah')->nullable();
            $table->string('npwp')->nullable();
            $table->string('riwayat_peroleh_tanah')->nullable();
            $table->string('sppt')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->date('verif_admin')->nullable();
            $table->date('verif_tim')->nullable();
            $table->date('verif_ketua')->nullable();
            $table->date('verif_kasi')->nullable();
            $table->date('verif_kadis')->nullable();

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
        Schema::dropIfExists('permohonan_tanahs');
    }
}
