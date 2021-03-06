<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TPendaftaranRt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('t_pendaftaran_rt', function (Blueprint $table) {
            $table->increments('id_pendaftaran_rt');
            $table->integer('id_keluarga')->unsigned();
            $table->foreign('id_keluarga')->references('id_keluarga')->on('t_keluarga');
            $table->integer('id_rt')->unsigned();
            $table->foreign('id_rt')->references('id_rt')->on('t_rt');
            $table->string('jumlah_anggota_keluarga', 5);
            $table->string('alamat', 500);
            $table->string('kk', 500);
            $table->string('ktp', 500);
            $table->boolean('isacc')->default(0);
            $table->date('updated_at');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('t_pendaftaran_rt');
    }
}
