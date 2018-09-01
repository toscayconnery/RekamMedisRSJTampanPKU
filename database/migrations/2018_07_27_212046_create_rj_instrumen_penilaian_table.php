<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJInstrumenPenilaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_instrumen_penilaian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id')->on('identifikasi');
            $table->integer('gaduh_gelisah');
            $table->integer('ketidakoperatifan');
            $table->integer('permusuhan');
            $table->integer('pengendalian_impuls');
            $table->integer('ketegangan');
            $table->string('bangsal');
            $table->string('tanggal_pemeriksaan');
            $table->string('panss_ec');
            $table->string('gaff');
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
        Schema::dropIfExists('rj_instrumen_penilaian');
    }
}