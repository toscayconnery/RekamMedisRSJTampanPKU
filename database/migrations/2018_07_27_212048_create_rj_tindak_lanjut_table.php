<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJTindakLanjutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_tindak_lanjut', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->integer('tindak_lanjut');
            $table->boolean('perlu_dikontrol');
            $table->string('tanggal_kontrol')->nullable();
            $table->string('ruangan');
            $table->string('indikasi_rawat_inap')->nullable();
            $table->string('alasan_menolak')->nullable();
            $table->string('dirujuk_ke');
            $table->string('alasan_dirujuk');
            $table->string('kesadaran');
            $table->string('kesadaran_lainnya')->nullable();
            $table->string('tensi');
            $table->string('nadi');
            $table->string('pernafasan');
            $table->string('suhu');
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
        Schema::dropIfExists('rj_tindak_lanjut');
    }
}
