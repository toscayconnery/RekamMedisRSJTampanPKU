<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiPermintaanRohaniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ri_permintaan_rohani', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('nama')->nullable();
            $table->string('umur')->nullable();
            $table->string('jk')->nullable();
            $table->string('alamat')->nullable();
            $table->string('agama')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('hub')->nullable();
            $table->string('hub_lain')->nullable();
            $table->string('nama_hub')->nullable();
            $table->string('umur_hub')->nullable();
            $table->string('jk_hub')->nullable();
            $table->string('alamat_hub')->nullable();
            $table->string('agama_hub')->nullable();
            $table->string('no_telp_hub')->nullable();
            $table->string('permintaan_rohani')->nullable();
            $table->string('hd')->nullable();
            $table->string('keterangan_hd')->nullable();
            $table->string('tanggal',10)->nullable();
            $table->string('nama_saksi')->nullable();
            $table->string('nama_pemohon')->nullable();
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
        Schema::dropIfExists('ri_permintaan_rohani');
    }
}
