<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('siswa_id');
            $table->foreignId('kelas_id')->references('kelas_id')->on('kelas');
            $table->string('siswa_nama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('siswa');
    }
}
