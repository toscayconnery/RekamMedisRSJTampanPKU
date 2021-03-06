<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJPemeriksaanPenunjangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_pemeriksaan_penunjang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('jenis');
            $table->string('jam_pemeriksaan');
            $table->string('jam_hasil')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('laboratorium')->nullable();
            $table->string('radiologi')->nullable();
            $table->string('ekg')->nullable();
            $table->string('lainnya')->nullable();
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
        Schema::dropIfExists('rj_pemeriksaan_penunjang');
    }
}
