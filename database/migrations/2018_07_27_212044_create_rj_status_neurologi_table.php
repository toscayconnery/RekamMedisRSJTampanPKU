<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRJStatusNeurologiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rj_status_neurologi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_regis')->reference('id_pasien')->on('identifikasi');
            $table->string('meningeal');
            $table->string('nervus');
            $table->string('motorik');
            $table->string('cerebellum');
            $table->string('vegetatif');
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
        Schema::dropIfExists('rj_status_neurologi');
    }
}
